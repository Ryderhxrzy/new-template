<?php
/**
 * Reusable Sidebar Component
 * Include this file in your pages where you want a sidebar: <?php include 'sidebar/sidebar.php'; ?>
 * 
 * Features:
 * - Responsive design with mobile toggle
 * - Admin-style navigation
 * - Collapsible sections
 * - Dark mode support
 * - Multiple layout options
 */
?>

<!-- Sidebar Component -->
<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <div class="sidebar-brand">
            <div class="brand-logo">
                <i class="fas fa-code"></i>
                <span>Admin Panel</span>
            </div>
        </div>
    </div>
    
    <div class="sidebar-content">
        <!-- Navigation Menu -->
        <nav class="sidebar-nav">
            <!-- Components Section -->
            <div class="sidebar-section">
                <h3 class="sidebar-section-title">Components</h3>
                <ul class="sidebar-menu">
                    <li class="sidebar-menu-item">
                        <a href="buttons.php" class="sidebar-link <?php echo basename($_SERVER['PHP_SELF']) == 'buttons.php' ? 'active' : ''; ?>">
                            <span>Buttons</span>
                        </a>
                    </li>
                    
                    <li class="sidebar-menu-item">
                        <a href="forms.php" class="sidebar-link <?php echo basename($_SERVER['PHP_SELF']) == 'forms.php' ? 'active' : ''; ?>">
                            <span>Forms</span>
                        </a>
                    </li>
                    
                    <li class="sidebar-menu-item">
                        <a href="textfields.php" class="sidebar-link <?php echo basename($_SERVER['PHP_SELF']) == 'textfields.php' ? 'active' : ''; ?>">
                            <span>Text Fields</span>
                        </a>
                    </li>
                    
                    <li class="sidebar-menu-item">
                        <a href="datatables.php" class="sidebar-link <?php echo basename($_SERVER['PHP_SELF']) == 'datatables.php' ? 'active' : ''; ?>">
                            <span>Data Tables</span>
                        </a>
                    </li>
                    
                    <li class="sidebar-menu-item">
                        <a href="content.php" class="sidebar-link <?php echo basename($_SERVER['PHP_SELF']) == 'content.php' ? 'active' : ''; ?>">
                            <span>Content</span>
                        </a>
                    </li>
                    
                    <li class="sidebar-menu-item">
                        <a href="cards.php" class="sidebar-link <?php echo basename($_SERVER['PHP_SELF']) == 'cards.php' ? 'active' : ''; ?>">
                            <span>Cards</span>
                        </a>
                    </li>
                </ul>
            </div>
            
            <!-- Admin Section -->
            <div class="sidebar-section">
                <h3 class="sidebar-section-title">Admin</h3>
                <ul class="sidebar-menu">
                    <li class="sidebar-menu-item">
                        <a href="../admin-dashboard.php" class="sidebar-link <?php echo basename($_SERVER['PHP_SELF']) == 'admin-dashboard.php' ? 'active' : ''; ?>">
                            <span>Dashboard</span>
                        </a>
                    </li>
                    
                    <li class="sidebar-menu-item">
                        <a href="#" class="sidebar-link sidebar-submenu-toggle">
                            <span>Users</span>
                            <i class="fas fa-chevron-down submenu-icon"></i>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="users.php" class="sidebar-link <?php echo basename($_SERVER['PHP_SELF']) == 'users.php' ? 'active' : ''; ?>">
                                    <span>All Users</span>
                                </a>
                            </li>
                            <li>
                                <a href="user-roles.php" class="sidebar-link <?php echo basename($_SERVER['PHP_SELF']) == 'user-roles.php' ? 'active' : ''; ?>">
                                    <span>Roles</span>
                                </a>
                            </li>
                            <li>
                                <a href="user-permissions.php" class="sidebar-link <?php echo basename($_SERVER['PHP_SELF']) == 'user-permissions.php' ? 'active' : ''; ?>">
                                    <span>Permissions</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="sidebar-menu-item">
                        <a href="#" class="sidebar-link sidebar-submenu-toggle">
                            <span>Settings</span>
                            <i class="fas fa-chevron-down submenu-icon"></i>
                        </a>
                        <ul class="sidebar-submenu">
                            <li>
                                <a href="general-settings.php" class="sidebar-link <?php echo basename($_SERVER['PHP_SELF']) == 'general-settings.php' ? 'active' : ''; ?>">
                                    <span>General</span>
                                </a>
                            </li>
                            <li>
                                <a href="security-settings.php" class="sidebar-link <?php echo basename($_SERVER['PHP_SELF']) == 'security-settings.php' ? 'active' : ''; ?>">
                                    <span>Security</span>
                                </a>
                            </li>
                            <li>
                                <a href="appearance-settings.php" class="sidebar-link <?php echo basename($_SERVER['PHP_SELF']) == 'appearance-settings.php' ? 'active' : ''; ?>">
                                    <span>Appearance</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            
            <!-- Actions Section -->
            <div class="sidebar-section">
                <h3 class="sidebar-section-title">Actions</h3>
                <ul class="sidebar-menu">
                    <li class="sidebar-menu-item">
                        <a href="../login.php" class="sidebar-link">
                            <span>Login</span>
                        </a>
                    </li>
                    
                    <li class="sidebar-menu-item">
                        <a href="../logout.php" class="sidebar-link">
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    
    <!-- Admin Footer -->
    <div class="sidebar-footer">
        <!-- Copyright -->
        <div class="sidebar-copyright">
            <p>&copy; <?php echo date('Y'); ?> LGU #4</p>
            <p>All rights reserved</p>
        </div>
        
        <!-- Theme Toggle -->
        <div class="sidebar-theme-toggle">
            <div class="theme-toggle">
                <button class="theme-toggle-btn" data-theme="system" aria-label="System theme">
                    <i class="fas fa-desktop"></i>
                </button>
                <button class="theme-toggle-btn" data-theme="light" aria-label="Light theme">
                    <i class="fas fa-sun"></i>
                </button>
                <button class="theme-toggle-btn" data-theme="dark" aria-label="Dark theme">
                    <i class="fas fa-moon"></i>
                </button>
            </div>
        </div>
    </div>
</aside>

<!-- Sidebar Overlay for mobile -->
<div class="sidebar-overlay" id="sidebarOverlay"></div>

<script>
// Sidebar functionality
document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('sidebar');
    const sidebarOverlay = document.getElementById('sidebarOverlay');
    
    // Toggle sidebar
    function toggleSidebar() {
        sidebar.classList.toggle('sidebar-open');
        sidebarOverlay.classList.toggle('sidebar-overlay-open');
        document.body.classList.toggle('sidebar-open');
    }
    
    // Close sidebar
    function closeSidebar() {
        sidebar.classList.remove('sidebar-open');
        sidebarOverlay.classList.remove('sidebar-overlay-open');
        document.body.classList.remove('sidebar-open');
    }
    
    // Close on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && sidebar.classList.contains('sidebar-open')) {
            closeSidebar();
        }
    });
    
    // Handle submenu toggles
    const submenuToggles = document.querySelectorAll('.sidebar-submenu-toggle');
    submenuToggles.forEach(toggle => {
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            const submenu = this.nextElementSibling;
            const icon = this.querySelector('.submenu-icon');
            
            if (submenu) {
                submenu.classList.toggle('sidebar-submenu-open');
                if (icon) {
                    icon.classList.toggle('fa-chevron-down');
                    icon.classList.toggle('fa-chevron-up');
                }
            }
        });
    });
    
    // Theme Toggle functionality
    const themeToggleBtns = document.querySelectorAll('.sidebar-theme-toggle .theme-toggle-btn');
    const htmlElement = document.documentElement;
    
    // Load saved theme
    const savedTheme = localStorage.getItem('theme') || 'system';
    htmlElement.setAttribute('data-theme', savedTheme);
    updateThemeButtons(savedTheme);
    
    themeToggleBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const theme = btn.getAttribute('data-theme');
            htmlElement.setAttribute('data-theme', theme);
            localStorage.setItem('theme', theme);
            updateThemeButtons(theme);
            
            // Apply system theme if selected
            if (theme === 'system') {
                applySystemTheme();
            }
        });
    });
    
    function updateThemeButtons(theme) {
        themeToggleBtns.forEach(btn => {
            if (btn.getAttribute('data-theme') === theme) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });
    }
    
    function applySystemTheme() {
        const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
        htmlElement.setAttribute('data-theme', prefersDark ? 'dark' : 'light');
    }
    
    // Listen for system theme changes
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
        if (localStorage.getItem('theme') === 'system') {
            applySystemTheme();
        }
    });
});
</script>
