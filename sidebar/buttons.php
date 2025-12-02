<?php
/**
 * Buttons Page with Sidebar Integration Only
 * Sample page demonstrating buttons with sidebar navigation (no header)
 */

$pageTitle = 'Buttons - Sidebar Demo';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/admin-header.css">
</head>
<body>

<!-- Include Sidebar Component -->
<?php include 'sidebar.php'; ?>

<!-- Include Admin Header Component -->
<?php include 'admin-header.php'; ?>

<!-- Main Content Area -->
<main class="main-content">
    <div class="main-container">
        <div class="sub-container">
            
            <!-- Page Header -->
            <div class="page-header">
                <h1>Button Components</h1>
                <p>Complete button system with various styles, sizes, and states for your interface design.</p>
            </div>
            
            <!-- Button Variants Section -->
            <section class="component-section">
                <h2><i class="fas fa-square"></i> Button Variants</h2>
                <p>Different button styles for various actions and contexts.</p>
                
                <div class="button-showcase">
                    <h3>Primary Buttons</h3>
                    <div class="button-group">
                        <button class="btn btn-primary">Primary Button</button>
                        <button class="btn btn-primary" disabled>Disabled Primary</button>
                        <a href="#" class="btn btn-primary">Primary Link</a>
                    </div>
                    
                    <h3>Secondary Buttons</h3>
                    <div class="button-group">
                        <button class="btn btn-secondary">Secondary Button</button>
                        <button class="btn btn-secondary" disabled>Disabled Secondary</button>
                        <a href="#" class="btn btn-secondary">Secondary Link</a>
                    </div>
                    
                    <h3>Outline Buttons</h3>
                    <div class="button-group">
                        <button class="btn btn-outline-primary">Outline Primary</button>
                        <button class="btn btn-outline-secondary">Outline Secondary</button>
                        <button class="btn btn-outline-success">Outline Success</button>
                        <button class="btn btn-outline-danger">Outline Danger</button>
                    </div>
                    
                    <h3>Special Buttons</h3>
                    <div class="button-group">
                        <button class="btn btn-success">Success Button</button>
                        <button class="btn btn-warning">Warning Button</button>
                        <button class="btn btn-danger">Danger Button</button>
                        <button class="btn btn-info">Info Button</button>
                    </div>
                </div>
            </section>
            
            <!-- Button Sizes Section -->
            <section class="component-section">
                <h2><i class="fas fa-expand-arrows-alt"></i> Button Sizes</h2>
                <p>Different button sizes for various use cases and importance levels.</p>
                
                <div class="button-showcase">
                    <div class="button-group">
                        <button class="btn btn-primary btn-lg">Large Button</button>
                        <button class="btn btn-primary">Default Button</button>
                        <button class="btn btn-primary btn-sm">Small Button</button>
                        <button class="btn btn-primary btn-xs">Extra Small</button>
                    </div>
                </div>
            </section>
            
            <!-- Button States Section -->
            <section class="component-section">
                <h2><i class="fas fa-toggle-on"></i> Button States</h2>
                <p>Various button states including hover, active, focus, and loading.</p>
                
                <div class="button-showcase">
                    <h3>Interactive States</h3>
                    <div class="button-group">
                        <button class="btn btn-primary">Normal State</button>
                        <button class="btn btn-primary active">Active State</button>
                        <button class="btn btn-primary btn-loading">Loading State</button>
                    </div>
                    
                    <h3>Disabled States</h3>
                    <div class="button-group">
                        <button class="btn btn-primary" disabled>Disabled Primary</button>
                        <button class="btn btn-secondary" disabled>Disabled Secondary</button>
                        <button class="btn btn-outline-primary" disabled>Disabled Outline</button>
                    </div>
                </div>
            </section>
            
            <!-- Button Groups Section -->
            <section class="component-section">
                <h2><i class="fas fa-layer-group"></i> Button Groups</h2>
                <p>Group related buttons together for better organization and visual hierarchy.</p>
                
                <div class="button-showcase">
                    <h3>Basic Button Group</h3>
                    <div class="btn-group">
                        <button class="btn btn-primary">Left</button>
                        <button class="btn btn-primary">Middle</button>
                        <button class="btn btn-primary">Right</button>
                    </div>
                    
                    <h3>Vertical Button Group</h3>
                    <div class="btn-group btn-group-vertical">
                        <button class="btn btn-outline-primary">Top</button>
                        <button class="btn btn-outline-primary">Middle</button>
                        <button class="btn btn-outline-primary">Bottom</button>
                    </div>
                    
                    <h3>Mixed Style Group</h3>
                    <div class="btn-group">
                        <button class="btn btn-outline-primary">Previous</button>
                        <button class="btn btn-primary">Current</button>
                        <button class="btn btn-outline-primary">Next</button>
                    </div>
                </div>
            </section>
            
            <!-- Icon Buttons Section -->
            <section class="component-section">
                <h2><i class="fas fa-icons"></i> Icon Buttons</h2>
                <p>Buttons with icons for better visual communication and faster recognition.</p>
                
                <div class="button-showcase">
                    <h3>Icon Only Buttons</h3>
                    <div class="button-group">
                        <button class="btn btn-icon btn-primary" aria-label="Add">
                            <i class="fas fa-plus"></i>
                        </button>
                        <button class="btn btn-icon btn-secondary" aria-label="Edit">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-icon btn-danger" aria-label="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                        <button class="btn btn-icon btn-success" aria-label="Check">
                            <i class="fas fa-check"></i>
                        </button>
                    </div>
                    
                    <h3>Icon with Text</h3>
                    <div class="button-group">
                        <button class="btn btn-primary">
                            <i class="fas fa-download"></i>
                            Download
                        </button>
                        <button class="btn btn-secondary">
                            <i class="fas fa-share"></i>
                            Share
                        </button>
                        <button class="btn btn-outline-primary">
                            <i class="fas fa-print"></i>
                            Print
                        </button>
                    </div>
                    
                    <h3>Social Media Buttons</h3>
                    <div class="button-group">
                        <button class="btn btn-social btn-facebook">
                            <i class="fab fa-facebook-f"></i>
                            Facebook
                        </button>
                        <button class="btn btn-social btn-twitter">
                            <i class="fab fa-twitter"></i>
                            Twitter
                        </button>
                        <button class="btn btn-social btn-linkedin">
                            <i class="fab fa-linkedin-in"></i>
                            LinkedIn
                        </button>
                    </div>
                </div>
            </section>
            
            <!-- Implementation Guide -->
            <section class="component-section">
                <h2><i class="fas fa-code"></i> Implementation Guide</h2>
                <p>How to use buttons in your projects with proper HTML structure and CSS classes.</p>
                
                <div class="implementation-guide">
                    <h3>Basic Button</h3>
                    <pre><code>&lt;button class="btn btn-primary"&gt;Click me&lt;/button&gt;
&lt;a href="#" class="btn btn-secondary"&gt;Link button&lt;/a&gt;</code></pre>
                    
                    <h3>Button Sizes</h3>
                    <pre><code>&lt;button class="btn btn-primary btn-lg"&gt;Large&lt;/button&gt;
&lt;button class="btn btn-primary"&gt;Default&lt;/button&gt;
&lt;button class="btn btn-primary btn-sm"&gt;Small&lt;/button&gt;</code></pre>
                    
                    <h3>Button States</h3>
                    <pre><code>&lt;button class="btn btn-primary active"&gt;Active&lt;/button&gt;
&lt;button class="btn btn-primary" disabled&gt;Disabled&lt;/button&gt;
&lt;button class="btn btn-primary btn-loading"&gt;Loading&lt;/button&gt;</code></pre>
                    
                    <h3>Icon Buttons</h3>
                    <pre><code>&lt;button class="btn btn-primary"&gt;
    &lt;i class="fas fa-download"&gt;&lt;/i&gt;
    Download
&lt;/button&gt;</code></pre>
                </div>
            </section>
            
        </div>
    </div>
</main>

<!-- Page-specific styles -->
<style>
/* Main content adjustments for fixed header */
.main-content {
    padding-top: 70px;
}

.page-header {
    margin-bottom: 2rem;
    padding: 2rem 0;
    border-bottom: 1px solid var(--border-color);
}

.page-header h1 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
    color: var(--text-color);
}

.page-header p {
    color: var(--text-secondary);
    font-size: 1.1rem;
}

.component-section {
    background: var(--card-bg);
    border: 1px solid var(--border-color);
    border-radius: 0.75rem;
    padding: 1.5rem;
    margin-bottom: 2rem;
}

.component-section h2 {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
    color: var(--text-color);
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.component-section p {
    color: var(--text-secondary);
    margin-bottom: 1.5rem;
}

.button-showcase h3 {
    font-size: 1rem;
    font-weight: 600;
    color: var(--text-color);
    margin-bottom: 1rem;
    margin-top: 1.5rem;
}

.button-showcase h3:first-child {
    margin-top: 0;
}

.button-group {
    display: flex;
    gap: 0.75rem;
    flex-wrap: wrap;
    align-items: center;
}

.implementation-guide {
    background: var(--bg-color);
    border: 1px solid var(--border-color);
    border-radius: 0.5rem;
    padding: 1.5rem;
}

.implementation-guide h3 {
    font-size: 1rem;
    font-weight: 600;
    color: var(--text-color);
    margin-bottom: 1rem;
    margin-top: 1.5rem;
}

.implementation-guide h3:first-child {
    margin-top: 0;
}

.implementation-guide pre {
    background: var(--dark-color);
    color: #f8f8f2;
    padding: 1rem;
    border-radius: 0.5rem;
    overflow-x: auto;
    font-family: 'Monaco', 'Menlo', 'Ubuntu Mono', monospace;
    font-size: 0.875rem;
    line-height: 1.5;
}

.implementation-guide code {
    background: none;
    padding: 0;
    color: inherit;
}

/* Button styles (assuming they exist in main styles.css) */
.btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    border: 1px solid transparent;
    border-radius: 0.5rem;
    font-size: 0.95rem;
    font-weight: 500;
    text-decoration: none;
    cursor: pointer;
    transition: all 0.2s ease;
    white-space: nowrap;
}

.btn-primary {
    background-color: var(--primary-color);
    color: white;
    border-color: var(--primary-color);
}

.btn-primary:hover {
    background-color: #3a6d6c;
    border-color: #3a6d6c;
}

.btn-secondary {
    background-color: var(--secondary-color);
    color: white;
    border-color: var(--secondary-color);
}

.btn-outline-primary {
    background-color: transparent;
    color: var(--primary-color);
    border-color: var(--primary-color);
}

.btn-outline-primary:hover {
    background-color: var(--primary-color);
    color: white;
}

.btn-success {
    background-color: #28a745;
    color: white;
    border-color: #28a745;
}

.btn-warning {
    background-color: #ffc107;
    color: #212529;
    border-color: #ffc107;
}

.btn-danger {
    background-color: #dc3545;
    color: white;
    border-color: #dc3545;
}

.btn-info {
    background-color: #17a2b8;
    color: white;
    border-color: #17a2b8;
}

.btn-lg {
    padding: 1rem 2rem;
    font-size: 1.125rem;
}

.btn-sm {
    padding: 0.5rem 1rem;
    font-size: 0.875rem;
}

.btn-xs {
    padding: 0.25rem 0.75rem;
    font-size: 0.75rem;
}

.btn-icon {
    padding: 0.75rem;
    width: 48px;
    height: 48px;
}

.btn-icon.btn-sm {
    width: 36px;
    height: 36px;
    padding: 0.5rem;
}

.btn-group {
    display: inline-flex;
    border-radius: 0.5rem;
    overflow: hidden;
}

.btn-group .btn {
    border-radius: 0;
    border-right: 1px solid rgba(255, 255, 255, 0.2);
}

.btn-group .btn:first-child {
    border-top-left-radius: 0.5rem;
    border-bottom-left-radius: 0.5rem;
}

.btn-group .btn:last-child {
    border-top-right-radius: 0.5rem;
    border-bottom-right-radius: 0.5rem;
    border-right: none;
}

.btn-group-vertical {
    flex-direction: column;
}

.btn-group-vertical .btn {
    border-radius: 0;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    border-right: none;
}

.btn-group-vertical .btn:first-child {
    border-top-left-radius: 0.5rem;
    border-top-right-radius: 0.5rem;
}

.btn-group-vertical .btn:last-child {
    border-bottom-left-radius: 0.5rem;
    border-bottom-right-radius: 0.5rem;
    border-bottom: none;
}

.btn-social {
    color: white;
}

.btn-facebook {
    background-color: #1877f2;
    border-color: #1877f2;
}

.btn-twitter {
    background-color: #1da1f2;
    border-color: #1da1f2;
}

.btn-linkedin {
    background-color: #0077b5;
    border-color: #0077b5;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .main-content {
        padding-top: 60px;
    }
    
    .button-group {
        flex-direction: column;
        align-items: stretch;
    }
    
    .btn-group {
        flex-direction: column;
    }
    
    .btn-group .btn {
        border-radius: 0.5rem;
        border-right: 1px solid transparent;
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        margin-bottom: 0.5rem;
    }
    
    .btn-group .btn:last-child {
        border-bottom: none;
        margin-bottom: 0;
    }
    
    .page-header h1 {
        font-size: 1.5rem;
    }
    
    .page-header p {
        font-size: 1rem;
    }
}

@media (max-width: 480px) {
    .main-content {
        padding-top: 56px;
    }
    
    .page-header h1 {
        font-size: 1.25rem;
    }
    
    .page-header p {
        font-size: 0.9rem;
    }
}
</style>

</body>
</html>
