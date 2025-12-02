<?php
/**
 * Admin Dashboard Example
 * Demonstrates how to use the sidebar component in a page
 */

$pageTitle = 'Admin Dashboard';
include 'includes/header.php';
?>

<!-- Include Sidebar CSS -->
<link rel="stylesheet" href="css/sidebar.css">

<!-- Include Sidebar Component -->
<?php include 'sidebar/sidebar.php'; ?>

<!-- Main Content Area -->
<main class="main-content">
    <div class="main-container">
        <div class="sub-container">
            
            <!-- Dashboard Header -->
            <div class="dashboard-header">
                <h1>Admin Dashboard</h1>
                <p>Welcome to the admin panel. Use the sidebar to navigate through different sections.</p>
            </div>
            
            <!-- Dashboard Content -->
            <div class="dashboard-grid">
                <!-- Stats Cards -->
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-content">
                            <h3>1,234</h3>
                            <p>Total Users</p>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="stat-content">
                            <h3>567</h3>
                            <p>Orders Today</p>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="stat-content">
                            <h3>$12,345</h3>
                            <p>Revenue</p>
                        </div>
                    </div>
                    
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="stat-content">
                            <h3>+23%</h3>
                            <p>Growth Rate</p>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Activity -->
                <div class="dashboard-section">
                    <h2>Recent Activity</h2>
                    <div class="activity-list">
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-user-plus"></i>
                            </div>
                            <div class="activity-content">
                                <h4>New User Registration</h4>
                                <p>John Doe joined the platform</p>
                                <span class="activity-time">2 minutes ago</span>
                            </div>
                        </div>
                        
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-shopping-bag"></i>
                            </div>
                            <div class="activity-content">
                                <h4>New Order</h4>
                                <p>Order #1234 has been placed</p>
                                <span class="activity-time">15 minutes ago</span>
                            </div>
                        </div>
                        
                        <div class="activity-item">
                            <div class="activity-icon">
                                <i class="fas fa-comment"></i>
                            </div>
                            <div class="activity-content">
                                <h4>New Comment</h4>
                                <p>Sarah commented on your post</p>
                                <span class="activity-time">1 hour ago</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Actions -->
                <div class="dashboard-section">
                    <h2>Quick Actions</h2>
                    <div class="quick-actions">
                        <a href="users.php" class="btn btn-primary">
                            <i class="fas fa-users"></i>
                            Manage Users
                        </a>
                        <a href="forms.php" class="btn btn-secondary">
                            <i class="fas fa-edit"></i>
                            Create Form
                        </a>
                        <a href="datatables.php" class="btn btn-info">
                            <i class="fas fa-table"></i>
                            View Reports
                        </a>
                        <a href="settings.php" class="btn btn-outline-primary">
                            <i class="fas fa-cog"></i>
                            Settings
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</main>

<!-- Dashboard Styles -->
<style>
.dashboard-header {
    margin-bottom: 2rem;
    padding: 2rem 0;
    border-bottom: 1px solid var(--border-color);
}

.dashboard-header h1 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
    color: var(--text-color);
}

.dashboard-header p {
    color: var(--text-secondary);
    font-size: 1.1rem;
}

.dashboard-grid {
    display: grid;
    gap: 2rem;
}

.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
}

.stat-card {
    background: var(--card-bg);
    border: 1px solid var(--border-color);
    border-radius: 0.75rem;
    padding: 1.5rem;
    display: flex;
    align-items: center;
    gap: 1rem;
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.stat-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.stat-icon {
    width: 60px;
    height: 60px;
    background: var(--primary-color);
    color: white;
    border-radius: 0.5rem;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
}

.stat-content h3 {
    font-size: 1.75rem;
    font-weight: 700;
    margin-bottom: 0.25rem;
    color: var(--text-color);
}

.stat-content p {
    color: var(--text-secondary);
    font-size: 0.9rem;
}

.dashboard-section {
    background: var(--card-bg);
    border: 1px solid var(--border-color);
    border-radius: 0.75rem;
    padding: 1.5rem;
}

.dashboard-section h2 {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 1.5rem;
    color: var(--text-color);
}

.activity-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.activity-item {
    display: flex;
    align-items: flex-start;
    gap: 1rem;
    padding: 1rem;
    border-radius: 0.5rem;
    transition: background-color 0.2s ease;
}

.activity-item:hover {
    background-color: var(--sidebar-hover-bg);
}

.activity-icon {
    width: 40px;
    height: 40px;
    background: var(--primary-color);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.875rem;
    flex-shrink: 0;
}

.activity-content h4 {
    font-size: 0.95rem;
    font-weight: 600;
    margin-bottom: 0.25rem;
    color: var(--text-color);
}

.activity-content p {
    font-size: 0.875rem;
    color: var(--text-secondary);
    margin-bottom: 0.25rem;
}

.activity-time {
    font-size: 0.75rem;
    color: var(--text-secondary);
}

.quick-actions {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1rem;
}

.quick-actions .btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    padding: 1rem;
    text-decoration: none;
    border-radius: 0.5rem;
    font-weight: 500;
    transition: all 0.2s ease;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .stats-grid {
        grid-template-columns: 1fr;
    }
    
    .quick-actions {
        grid-template-columns: 1fr;
    }
    
    .dashboard-header h1 {
        font-size: 1.5rem;
    }
    
    .stat-card {
        padding: 1rem;
    }
    
    .stat-icon {
        width: 50px;
        height: 50px;
        font-size: 1.25rem;
    }
    
    .stat-content h3 {
        font-size: 1.5rem;
    }
}
</style>

<?php include 'includes/footer.php'; ?>
