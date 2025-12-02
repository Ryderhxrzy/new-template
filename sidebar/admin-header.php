<?php
/**
 * Reusable Admin Header Component
 * Include this file in your pages: <?php include 'sidebar/admin-header.php'; ?>
 * 
 * Features:
 * - Responsive menu toggle
 * - Notification and message icons with badges
 * - User profile with avatar and info
 * - Dark mode support
 */
?>

<!-- Admin Header Component -->
<header class="admin-header">
    <div class="admin-header-left">
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle menu">
            <i class="fas fa-bars"></i>
        </button>
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Search...">
            <button class="search-btn" aria-label="Search">
                <i class="fas fa-search"></i>
            </button>
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
        
        <div class="user-profile">
            <div class="user-info">
                <div class="user-name">Admin User</div>
                <div class="user-role">Administrator</div>
            </div>
            <div class="user-avatar">
                <i class="fas fa-user-circle"></i>
            </div>
        </div>
    </div>
</header>

<script>
// Admin Header functionality
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menuToggle');
    const sidebar = document.getElementById('sidebar');
    const sidebarOverlay = document.getElementById('sidebarOverlay');
    
    // Toggle sidebar from header menu button
    if (menuToggle && sidebar) {
        menuToggle.addEventListener('click', function() {
            sidebar.classList.toggle('sidebar-open');
            if (sidebarOverlay) {
                sidebarOverlay.classList.toggle('sidebar-overlay-open');
            }
            document.body.classList.toggle('sidebar-open');
        });
    }
    
    // Close sidebar when clicking overlay
    if (sidebarOverlay) {
        sidebarOverlay.addEventListener('click', function() {
            if (sidebar) {
                sidebar.classList.remove('sidebar-open');
                sidebarOverlay.classList.remove('sidebar-overlay-open');
                document.body.classList.remove('sidebar-open');
            }
        });
    }
    
    // Close on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && sidebar && sidebar.classList.contains('sidebar-open')) {
            sidebar.classList.remove('sidebar-open');
            if (sidebarOverlay) {
                sidebarOverlay.classList.remove('sidebar-overlay-open');
            }
            document.body.classList.remove('sidebar-open');
        }
    });
    
    // Search functionality
    const searchInput = document.querySelector('.search-input');
    const searchBtn = document.querySelector('.search-btn');
    
    if (searchBtn) {
        searchBtn.addEventListener('click', function() {
            if (searchInput) {
                const searchTerm = searchInput.value.trim();
                if (searchTerm) {
                    console.log('Searching for:', searchTerm);
                    // Add search functionality here
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
                    // Add search functionality here
                }
            }
        });
    }
    
    // Notification button interactions
    const notificationBtns = document.querySelectorAll('.admin-header .notification-btn');
    notificationBtns.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            // Add notification dropdown functionality here
            console.log('Notification clicked:', this.getAttribute('aria-label'));
        });
    });
    
    // User profile interaction
    const userProfile = document.querySelector('.admin-header .user-profile');
    if (userProfile) {
        userProfile.addEventListener('click', function() {
            // Add user menu dropdown functionality here
            console.log('User profile clicked');
        });
    });
});
</script>
