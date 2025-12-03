<?php
/**
 * Reusable Admin Header Component - Improved Design
 * Include this file in your pages: <?php include 'sidebar/admin-header.php'; ?>
 * 
 * Features:
 * - Responsive menu toggle
 * - Notification and message icons with badges (outlined style)
 * - User profile with avatar and info
 * - Dark mode support
 * - Clean, modern design
 */
?>

<!-- Admin Header Component -->
<header class="admin-header">
    <div class="admin-header-left">
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle menu">
            <i class="fas fa-bars"></i>
        </button>
        <div class="search-container">
            <i class="fas fa-search search-icon"></i>
            <input type="text" class="search-input" placeholder="Search...">
        </div>
    </div>
    
    <div class="admin-header-right">
        <div class="header-actions">
            <div class="notification-item">
                <button class="notification-btn" aria-label="Notifications">
                    <i class="fas fa-bell"></i>
                    <span class="notification-badge">3</span>
                </button>
            </div>
            
            <div class="notification-item">
                <button class="notification-btn" aria-label="Messages">
                    <i class="fas fa-envelope"></i>
                    <span class="notification-badge">5</span>
                </button>
            </div>
        </div>
        
        <div class="header-divider"></div>
        
        <div class="user-profile">
            <div class="user-info">
                <div class="user-name">Admin User</div>
                <div class="user-role">Administrator</div>
            </div>
            <div class="user-avatar">
                <img src="https://ui-avatars.com/api/?name=Admin+User&background=4c8a89&color=fff&size=128" alt="Admin User" class="avatar-img">
            </div>
            <i class="fas fa-chevron-down dropdown-icon"></i>
        </div>
    </div>
</header>

<script>
// Admin Header functionality
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menuToggle');
    
    // Toggle sidebar from header menu button
    if (menuToggle) {
        menuToggle.addEventListener('click', function() {
            // Use the global sidebarToggle function exposed by sidebar.php
            if (typeof window.sidebarToggle === 'function') {
                window.sidebarToggle();
            } else {
                console.warn('Sidebar toggle function not found. Make sure sidebar.php is included before admin-header.php');
            }
        });
    }
    
    // Search functionality
    const searchInput = document.querySelector('.search-input');
    const searchBtn = document.querySelector('.search-btn');
    
    if (searchBtn) {
        searchBtn.addEventListener('click', function() {
            if (searchInput) {
                const searchTerm = searchInput.value.trim();
                if (searchTerm) {
                    console.log('Searching for:', searchTerm);
                }
            }
        });
    }
    
    if (searchInput) {
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                const searchTerm = searchInput.value.trim();
                if (searchTerm) {
                    console.log('Searching for:', searchTerm);
                }
            }
        });
    }
    
    // Notification button interactions
    const notificationBtns = document.querySelectorAll('.admin-header .notification-btn');
    notificationBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            console.log('Notification clicked:', this.getAttribute('aria-label'));
        });
    });
    
    // User profile interaction
    const userProfile = document.querySelector('.admin-header .user-profile');
    if (userProfile) {
        userProfile.addEventListener('click', function() {
            console.log('User profile clicked');
        });
    }
});
</script>
