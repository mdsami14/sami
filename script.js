// Create script.js file and add this content
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');
    
    if (menuToggle) {
        menuToggle.addEventListener('click', function() {
            navLinks.classList.toggle('active');
        });
    }
    
    // Close mobile menu when clicking a link
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', () => {
            navLinks.classList.remove('active');
        });
    });
    
    // Portfolio filtering
    const filterButtons = document.querySelectorAll('.filter-btn');
    const portfolioItems = document.querySelectorAll('.portfolio-item');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            this.classList.add('active');
            
            const filterValue = this.getAttribute('data-filter');
            
            portfolioItems.forEach(item => {
                if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                    item.style.display = 'block';
                    setTimeout(() => {
                        item.style.opacity = '1';
                        item.style.transform = 'scale(1)';
                    }, 10);
                } else {
                    item.style.opacity = '0';
                    item.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        item.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
    
    // Animate skill bars when scrolling to them
    const animateSkillBars = () => {
        const skillBars = document.querySelectorAll('.skill-progress');
        const skillsSection = document.querySelector('.skills');
        
        if (!skillsSection) return;
        
        const sectionPosition = skillsSection.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.3;
        
        if (sectionPosition < screenPosition) {
            skillBars.forEach(bar => {
                const width = bar.style.width;
                bar.style.width = '0';
                
                setTimeout(() => {
                    bar.style.transition = 'width 1.5s ease-in-out';
                    bar.style.width = width;
                }, 200);
            });
            
            // Remove event listener after animation
            window.removeEventListener('scroll', animateSkillBars);
        }
    };
    
    window.addEventListener('scroll', animateSkillBars);
    
    // Form validation for contact form
    const contactForm = document.querySelector('.contact-form form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            const name = this.querySelector('input[name="name"]');
            const email = this.querySelector('input[name="email"]');
            const subject = this.querySelector('input[name="subject"]');
            const message = this.querySelector('textarea[name="message"]');
            let valid = true;
            
            // Reset previous error styles
            this.querySelectorAll('.form-group').forEach(group => {
                group.classList.remove('error');
            });
            
            // Validate name
            if (!name.value.trim()) {
                name.parentElement.classList.add('error');
                valid = false;
            }
            
            // Validate email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!email.value.trim() || !emailRegex.test(email.value)) {
                email.parentElement.classList.add('error');
                valid = false;
            }
            
            // Validate subject
            if (!subject.value.trim()) {
                subject.parentElement.classList.add('error');
                valid = false;
            }
            
            // Validate message
            if (!message.value.trim()) {
                message.parentElement.classList.add('error');
                valid = false;
            }
            
            if (!valid) {
                e.preventDefault();
                alert('Please fill in all fields correctly.');
            }
        });
    }
    
    // Add CSS for form errors
    const style = document.createElement('style');
    style.textContent = `
        .form-group.error input,
        .form-group.error textarea {
            border-color: #e74c3c;
            box-shadow: 0 0 0 2px rgba(231, 76, 60, 0.2);
        }
        
        .portfolio-item {
            transition: opacity 0.3s, transform 0.3s;
        }
    `;
    document.head.appendChild(style);
});