<?php
// Prevent direct access to this file
if (!defined('ABSPATH')) {
    header("HTTP/1.1 403 Forbidden");
    echo "Direct access to this file is forbidden.";
    exit;
}

/**
 * Social Media Open Graph Preview Tool
 * This tool helps test and preview how your pages will appear on social media platforms.
 * Include this file at the bottom of pages you want to test.
 * 
 * NOTE: This should only be visible to administrators or in development environments.
 * In production, you should either remove this or only show to admin users.
 */

// Only show this tool if an admin is logged in or in development mode
$is_admin = true; // Set to false in production or implement proper admin check
$is_dev_mode = true; // Set to false in production

if (!$is_admin && !$is_dev_mode) {
    return;
}

// Get the current URL
$current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

// Get meta tags from the current page
$meta_tags = array();
$og_tags = array();
$twitter_tags = array();

foreach (get_meta_tags($current_url) as $key => $value) {
    if (strpos($key, 'og:') === 0) {
        $og_tags[$key] = $value;
    } elseif (strpos($key, 'twitter:') === 0) {
        $twitter_tags[$key] = $value;
    } else {
        $meta_tags[$key] = $value;
    }
}

// Function to get HTML head content
function get_page_head($url) {
    $html = file_get_contents($url);
    
    // Extract content from head tag
    preg_match('/<head>(.*?)<\/head>/s', $html, $head_match);
    
    if (isset($head_match[1])) {
        return $head_match[1];
    }
    
    return '';
}

// Get head content
$head_content = get_page_head($current_url);

// Extract Open Graph and Twitter card meta tags
preg_match_all('/<meta[^>]+property=["\'](?:og|twitter):([^"\']+)["\'][^>]+content=["\']([^"\']+)["\'][^>]*>/i', $head_content, $social_meta_matches);
preg_match_all('/<meta[^>]+name=["\'](?:og|twitter):([^"\']+)["\'][^>]+content=["\']([^"\']+)["\'][^>]*>/i', $head_content, $name_meta_matches);

// Combine results
$social_meta = array();
for ($i = 0; $i < count($social_meta_matches[1]); $i++) {
    $social_meta[$social_meta_matches[1][$i]] = $social_meta_matches[2][$i];
}
for ($i = 0; $i < count($name_meta_matches[1]); $i++) {
    $social_meta[$name_meta_matches[1][$i]] = $name_meta_matches[2][$i];
}

// Get page title
preg_match('/<title>(.*?)<\/title>/s', $head_content, $title_match);
$page_title = isset($title_match[1]) ? $title_match[1] : '';

// Get canonical URL
preg_match('/<link[^>]+rel=["\']canonical["\'][^>]+href=["\']([^"\']+)["\'][^>]*>/i', $head_content, $canonical_match);
$canonical_url = isset($canonical_match[1]) ? $canonical_match[1] : $current_url;

// Get meta description
preg_match('/<meta[^>]+name=["\']description["\'][^>]+content=["\']([^"\']+)["\'][^>]*>/i', $head_content, $desc_match);
$meta_description = isset($desc_match[1]) ? $desc_match[1] : '';

// Get Open Graph image
$og_image = isset($social_meta['image']) ? $social_meta['image'] : '';
?>

<!-- Open Graph Preview Tool (Only visible to admins) -->
<div id="og-preview-tool" style="position: fixed; bottom: 20px; right: 20px; background-color: #fff; border: 1px solid #ddd; box-shadow: 0 0 10px rgba(0,0,0,0.1); padding: 15px; z-index: 9999; width: 320px; max-height: 500px; overflow-y: auto; border-radius: 8px;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
        <h3 style="margin: 0; color: #333; font-size: 16px;">SEO & Social Media Preview</h3>
        <div>
            <a href="?exit_preview=1" style="background: #4CAF50; color: white; font-size: 11px; padding: 3px 8px; border-radius: 3px; text-decoration: none; margin-right: 8px;">Exit Preview</a>
            <button id="close-og-preview" style="background: none; border: none; cursor: pointer; color: #777;">×</button>
        </div>
    </div>
    
    <div style="margin-bottom: 15px;">
        <h4 style="margin: 0 0 5px; font-size: 14px; color: #555;">Page Information</h4>
        <p style="margin: 0 0 5px; font-size: 12px;"><strong>Title:</strong> <?php echo htmlspecialchars($page_title); ?></p>
        <p style="margin: 0 0 5px; font-size: 12px;"><strong>Description:</strong> <?php echo htmlspecialchars($meta_description); ?></p>
        <p style="margin: 0 0 5px; font-size: 12px;"><strong>Canonical URL:</strong> <?php echo htmlspecialchars($canonical_url); ?></p>
    </div>
    
    <div style="margin-bottom: 15px;">
        <h4 style="margin: 0 0 5px; font-size: 14px; color: #555;">Facebook Preview</h4>
        <div style="border: 1px solid #ddd; border-radius: 4px; overflow: hidden;">
            <?php if ($og_image): ?>
            <div style="width: 100%; height: 157px; background: #eee url('<?php echo htmlspecialchars($og_image); ?>') no-repeat center; background-size: cover;"></div>
            <?php else: ?>
            <div style="width: 100%; height: 157px; background: #eee; display: flex; align-items: center; justify-content: center; color: #777;">No OG Image Found</div>
            <?php endif; ?>
            <div style="padding: 8px;">
                <p style="margin: 0 0 3px; font-size: 12px; color: #777;">orbizen.com</p>
                <p style="margin: 0 0 3px; font-size: 14px; font-weight: bold; color: #333; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                    <?php echo isset($social_meta['title']) ? htmlspecialchars($social_meta['title']) : htmlspecialchars($page_title); ?>
                </p>
                <p style="margin: 0; font-size: 12px; color: #666; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2; line-clamp: 2; overflow: hidden;">
                    <?php echo isset($social_meta['description']) ? htmlspecialchars($social_meta['description']) : htmlspecialchars($meta_description); ?>
                </p>
            </div>
        </div>
    </div>
    
    <div style="margin-bottom: 15px;">
        <h4 style="margin: 0 0 5px; font-size: 14px; color: #555;">Twitter Preview</h4>
        <div style="border: 1px solid #ddd; border-radius: 4px; overflow: hidden;">
            <?php if ($og_image): ?>
            <div style="width: 100%; height: 157px; background: #eee url('<?php echo htmlspecialchars($og_image); ?>') no-repeat center; background-size: cover;"></div>
            <?php else: ?>
            <div style="width: 100%; height: 157px; background: #eee; display: flex; align-items: center; justify-content: center; color: #777;">No Twitter Image Found</div>
            <?php endif; ?>
            <div style="padding: 8px;">
                <p style="margin: 0 0 3px; font-size: 14px; font-weight: bold; color: #333; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                    <?php echo isset($social_meta['title']) ? htmlspecialchars($social_meta['title']) : htmlspecialchars($page_title); ?>
                </p>
                <p style="margin: 0 0 3px; font-size: 12px; color: #666; display: -webkit-box; -webkit-box-orient: vertical; -webkit-line-clamp: 2; line-clamp: 2; overflow: hidden;">
                    <?php echo isset($social_meta['description']) ? htmlspecialchars($social_meta['description']) : htmlspecialchars($meta_description); ?>
                </p>
                <p style="margin: 0; font-size: 12px; color: #777;">orbizen.com</p>
            </div>
        </div>
    </div>
    
    <div>
        <h4 style="margin: 0 0 5px; font-size: 14px; color: #555;">SEO Issues</h4>
        <ul style="margin: 0; padding-left: 20px; font-size: 12px; color: #666;">
            <?php if (empty($page_title) || strlen($page_title) < 10): ?>
            <li style="color: #f44336;">Title tag is missing or too short (< 10 chars)</li>
            <?php elseif (strlen($page_title) > 60): ?>
            <li style="color: #ff9800;">Title tag is too long (> 60 chars)</li>
            <?php else: ?>
            <li style="color: #4CAF50;">Title tag length is optimal</li>
            <?php endif; ?>
            
            <?php if (empty($meta_description)): ?>
            <li style="color: #f44336;">Meta description is missing</li>
            <?php elseif (strlen($meta_description) < 50): ?>
            <li style="color: #ff9800;">Meta description is too short (< 50 chars)</li>
            <?php elseif (strlen($meta_description) > 160): ?>
            <li style="color: #ff9800;">Meta description is too long (> 160 chars)</li>
            <?php else: ?>
            <li style="color: #4CAF50;">Meta description length is optimal</li>
            <?php endif; ?>
            
            <?php if (empty($canonical_url)): ?>
            <li style="color: #f44336;">Canonical URL is missing</li>
            <?php else: ?>
            <li style="color: #4CAF50;">Canonical URL is present</li>
            <?php endif; ?>
            
            <?php if (empty($og_image)): ?>
            <li style="color: #f44336;">Open Graph image is missing</li>
            <?php else: ?>
            <li style="color: #4CAF50;">Open Graph image is present</li>
            <?php endif; ?>
        </ul>
    </div>
</div>

<script>
document.getElementById('close-og-preview').addEventListener('click', function() {
    document.getElementById('og-preview-tool').style.display = 'none';
});
</script>