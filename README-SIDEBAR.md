# Sidebar Component Documentation

## Overview
A reusable, responsive sidebar component that can be easily integrated into any page of your project. The sidebar features admin-style navigation with collapsible sections and mobile-responsive design.

## Files Created
- `sidebar/sidebar.php` - Main sidebar component
- `sidebar/content.php` - Sidebar navigation content
- `css/sidebar.css` - Complete sidebar styling
- `header/navigation.php` - Header-specific navigation (moved from header)
- `admin-dashboard.php` - Example usage demonstration

## How to Use

### Basic Integration
```php
<?php
$pageTitle = 'Your Page Title';
include 'includes/header.php';
?>

<!-- Include Sidebar CSS -->
<link rel="stylesheet" href="css/sidebar.css">

<!-- Include Sidebar Component -->
<?php include 'sidebar/sidebar.php'; ?>

<!-- Your main content -->
<main class="main-content">
    <div class="main-container">
        <div class="sub-container">
            <!-- Your page content here -->
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
```

## Features

### Responsive Design
- **Desktop (1024px+)**: Sidebar always visible on the left
- **Tablet (768px-1023px)**: Sidebar can be toggled
- **Mobile (<768px)**: Full overlay sidebar with hamburger menu

### Navigation Options
- Main navigation links
- Collapsible submenus
- Section headers
- User profile section
- Active state highlighting

### Styling Features
- Dark mode support
- Smooth animations
- Hover effects
- Focus states for accessibility
- High contrast mode support

## Customization

### Adding New Navigation Items
Edit `sidebar/content.php`:

```php
<li class="sidebar-menu-item">
    <a href="your-page.php" class="sidebar-link <?php echo $currentPage == 'your-page.php' ? 'active' : ''; ?>">
        <i class="fas fa-icon"></i>
        <span>Your Page</span>
    </a>
</li>
```

### Adding Submenus
```php
<li class="sidebar-menu-item">
    <a href="#" class="sidebar-link sidebar-submenu-toggle">
        <i class="fas fa-folder"></i>
        <span>Section Name</span>
        <i class="fas fa-chevron-down submenu-icon"></i>
    </a>
    <ul class="sidebar-submenu">
        <li>
            <a href="page1.php" class="sidebar-link">
                <i class="fas fa-file"></i>
                <span>Page 1</span>
            </a>
        </li>
        <li>
            <a href="page2.php" class="sidebar-link">
                <i class="fas fa-file"></i>
                <span>Page 2</span>
            </a>
        </li>
    </ul>
</li>
```

### CSS Variables
Customize the sidebar appearance by modifying these CSS variables in `css/sidebar.css`:

```css
:root {
    --sidebar-width: 280px;
    --sidebar-collapsed-width: 70px;
    --sidebar-bg: var(--header-bg);
    --sidebar-border: var(--border-color);
    --sidebar-text: var(--nav-text);
    --sidebar-text-secondary: var(--text-secondary);
    --sidebar-hover-bg: rgba(76, 138, 137, 0.1);
    --sidebar-active-bg: var(--primary-color);
    --sidebar-active-text: #ffffff;
}
```

## JavaScript Functionality
The sidebar includes built-in JavaScript for:
- Toggle open/close functionality
- Submenu expansion/collapse
- Mobile overlay behavior
- Keyboard navigation (ESC to close)
- Smooth animations

## Browser Support
- Modern browsers (Chrome, Firefox, Safari, Edge)
- Responsive design works on all device sizes
- Accessibility features for screen readers
- High contrast mode support

## Example Usage
See `admin-dashboard.php` for a complete example of how to integrate the sidebar into a page with dashboard content.
