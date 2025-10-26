<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premier Insurance | Protecting What Matters Most</title>
    
    <!-- Load Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <style>
        .hero-background {
            background-color: #1a4374; /* Dark Blue */
            background-size: cover;
            background-position: center;
            position: relative;
            z-index: 1;
        }
        .text-shadow-custom {
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        .font-playfair {
            font-family: 'Playfair Display', serif;
        }
        .font-open-sans {
            font-family: 'Open Sans', sans-serif;
        }
    </style>
</head>
<body class="font-open-sans text-gray-900 bg-gray-50">

    <!-- Header / Navigation Bar - UPDATED LINKS -->
    <header class="absolute top-0 left-0 right-0 z-20 p-4">
        <nav class="container mx-auto flex justify-between items-center px-4 md:px-6 lg:px-8">
            <a href="#" onclick="showSection('hero')" class="flex items-center space-x-2 text-white text-lg font-bold">
                <svg class="h-8 w-8 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.001 12.001 0 002 15.464V18a2 2 0 002 2h16a2 2 0 002-2v-2.536a12.001 12.001 0 00-1.382-6.52Z" />
                </svg>
                <span>Premier Insurance Consultancy Services</span>
            </a>
            
            <div class="hidden md:flex space-x-6">
                <a href="#" onclick="showSection('services-list')" class="text-white hover:text-cyan-400 transition-colors">Our Services</a>
                <a href="#" onclick="showSection('about-us-section')" class="text-white hover:text-cyan-400 transition-colors">About Us</a>
                <a href="#" onclick="showSection('contact-section')" class="text-white hover:text-cyan-400 transition-colors">Contact</a>
            </div>
            
        </nav>
    </header>

    <!-- 1. Hero Section -->
    <section id="hero" class="hero-background flex items-center justify-center min-h-screen py-20 px-4">
        <div class="container mx-auto text-white text-center md:text-left relative z-10 max-w-4xl">
            <h1 class="font-playfair text-5xl md:text-6xl lg:text-7xl font-bold leading-tight mb-6 text-shadow-custom">
                Protecting What Matters Most
            </h1>
            <p class="font-open-sans text-lg md:text-xl lg:text-2xl mb-10 max-w-2xl mx-auto md:mx-0 text-shadow-custom">
                Expert insurance consultancy services tailored to your unique needs. Comprehensive risk management solutions for businesses and individuals.
            </p>
            <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4 justify-center md:justify-start">
                <a href="#" onclick="showSection('contact-section')" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-gray-900 bg-cyan-500 hover:bg-cyan-600 transition-colors duration-200 shadow-lg">
                    Schedule Consultation
                    <svg class="ml-2 -mr-1 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
                <a onclick="showSection('services-list')" href="#" class="inline-flex items-center justify-center px-8 py-3 border border-cyan-500 text-base font-medium rounded-md text-white bg-transparent hover:bg-cyan-500 hover:text-gray-900 transition-colors duration-200">
                    Learn More
                </a>
            </div>
        </div>
    </section>

    <!-- 2. Services List Section -->
    <section id="services-list" class="hidden py-16 md:py-24 px-4 bg-gray-50">
        <div class="container mx-auto">
            <div class="text-center mb-12">
                <h2 class="font-playfair text-4xl font-bold text-gray-800 mb-4">Our Core Consulting Services</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Click on any card to dive deeper into our specialization and approach.
                </p>
            </div>

            <div id="service-cards-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <?php
                // PHP Array of Services with an added 'id' for JavaScript referencing and detailed content
                $services = array(
                    'personal' => array(
                        'id' => 'personal',
                        'title' => 'Personal Risk Review',
                        'icon_path' => 'M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.589a12.023 12.023 0 01-2.072-5.614A18.828 18.828 0 015.424 9.096m11.972 3.824a12.024 12.024 0 00-1.742-3.834m-6.074 1.15a6.002 6.002 0 01-1.391-4.721A12.007 12.007 0 0112.556 3c-1.849 0-3.61.644-5.004 1.761a.992 .992 0 00-.063-.042A12.08 12.08 0 0112 3.013a12.006 12.006 0 015.936 2.052m-7.04 6.71a5.975 5.975 0 015.005-7.792M10 12h4m-2 2v-4',
                        'description' => 'Home, auto, and life insurance assessments. We help families protect their assets and plan for the future.',
                        'details' => 'Our Personal Risk Review begins with a full audit of your current assets, liabilities, and existing policies. We focus on gap analysis, ensuring your home (property, natural disasters), vehicles (liability, full coverage), and life events (income replacement, estate planning) are adequately protected. We don’t just sell insurance; we craft a security blanket tailored to your family\'s financial goals and legacy. Our goal is to consolidate and optimize your personal protection portfolio for maximum peace of mind.',
                        'scenario' => 'The Smith family owns two cars and a home. Our review identified they were severely underinsured on their dwelling replacement cost and lacked an umbrella policy. We recommended a policy restructure that increased their dwelling coverage by 40% and added a \$2M umbrella policy for only a \$50 monthly premium increase, securing their total net worth against catastrophic loss.',
                        'key_benefits' => ['Asset Protection Audit', 'Umbrella Policy Integration', 'Life Insurance Needs Analysis', 'Cost-Benefit Optimization']
                    ),
                    'commercial' => array(
                        'id' => 'commercial',
                        'title' => 'Commercial Coverage',
                        'icon_path' => 'M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9h6',
                        'description' => 'Liability, property, and workers\' compensation solutions for businesses of all sizes and industries.',
                        'details' => 'Navigating commercial insurance requires deep industry knowledge. We specialize in general and professional liability, commercial property, and comprehensive workers\' compensation planning. We analyze your operational structure and supply chain risks to recommend packages that mitigate exposure to lawsuits, physical damage, and business interruption, ensuring continuity even after an unexpected event.',
                        'scenario' => 'A small manufacturing company faced rising workers\' comp premiums due to a high-risk environment. We implemented a robust safety training program and restructured their policy into a pay-as-you-go model, resulting in a 15% reduction in their annual premiums within the first year.',
                        'key_benefits' => ['General and Professional Liability', 'Business Interruption Planning', 'Workers\' Compensation Audit', 'Cyber Risk Assessment']
                    ),
                    'benefits' => array(
                        'id' => 'benefits',
                        'title' => 'Employee Benefits',
                        'icon_path' => 'M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z',
                        'description' => 'Structuring competitive group health, dental, and retirement plans to attract and retain top talent.',
                        'details' => 'In a tight labor market, competitive benefits are essential. We help companies design cost-effective group health, dental, vision, and retirement plans (401k/IRA). Our consulting includes vendor negotiation, compliance review (e.g., ACA), and employee communication strategies, making sure your benefits package is a true retention tool.',
                        'scenario' => 'A tech startup was struggling with high turnover, partly due to perceived weak benefits. We introduced a tiered PPO/HMO health plan and implemented a Roth 401k option with a matching contribution, significantly boosting employee satisfaction and reducing their voluntary turnover rate by 8%.',
                        'key_benefits' => ['Group Health & Dental Design', 'Retirement Plan Structuring', 'Vendor Negotiation', 'Compliance & Communication']
                    ),
                    'financial' => array(
                        'id' => 'financial',
                        'title' => 'Financial Planning',
                        'icon_path' => 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8c-1.11 0-2.08-.402-2.599-1M5 3a2 2 0 00-2 2v2a2 2 0 002 2h4.5a.5.5 0 010 1H5a2 2 0 00-2 2v2a2 2 0 002 2h14a2 2 0 002-2v-2a2 2 0 00-2-2h-4.5a.5.5 0 010-1H19a2 2 0 002-2V5a2 2 0 00-2-2H5z',
                        'description' => 'Integrating insurance policies with wealth management goals to create a strong, comprehensive financial strategy.',
                        'details' => 'True financial security involves integrating protection and growth. Our comprehensive financial planning services merge long-term investment goals with appropriate insurance instruments (e.g., whole life, annuities) to minimize tax exposure and ensure wealth transfer. We collaborate with your existing advisors (or provide our own) to create a unified strategy.',
                        'scenario' => 'A high-net-worth individual had separate financial planning and insurance brokers. We consolidated their strategy, using a specialized permanent life insurance policy to serve as a tax-advantaged asset and secure a future trust, streamlining their estate and saving them significant yearly premium costs.',
                        'key_benefits' => ['Wealth Protection Strategy', 'Estate Planning Integration', 'Annuity & Permanent Life Consulting', 'Tax Minimization via Insurance Products']
                    )
                );
                
                // Convert PHP array to JSON for use in JavaScript
                $services_json = json_encode($services);

                // Output the service cards dynamically
                foreach ($services as $key => $service) {
                    echo <<<CARD
                    <!-- Service Card for {$service['title']} -->
                    <div onclick="showServiceDetails('{$key}')" class="bg-white p-6 rounded-xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 border-t-4 border-cyan-500 cursor-pointer">
                        <div class="flex items-center mb-4">
                            <!-- Service Icon (using inline SVG) -->
                            <div class="p-3 rounded-full bg-cyan-100 text-cyan-600 mr-4">
                                <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <!-- The icon_path contains the SVG path data -->
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{$service['icon_path']}" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold text-gray-800">{$service['title']}</h3>
                        </div>
                        <p class="text-gray-600">{$service['description']}</p>
                        <span class="mt-4 inline-block text-cyan-600 font-medium hover:text-cyan-800 transition-colors">
                            View Details &rarr;
                        </span>
                    </div>
                    CARD;
                }
                ?>
                
            </div>
        </div>
    </section>
    
    <!-- 3. Dynamic Details Section -->
    <section id="service-details" class="hidden py-16 md:py-24 px-4 bg-white min-h-screen">
        <div class="container mx-auto max-w-5xl">
            <button onclick="showSection('services-list')" class="flex items-center text-lg font-medium text-gray-600 hover:text-cyan-600 transition-colors mb-8">
                <svg class="w-5 h-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Back to All Services
            </button>

            <div id="details-content">
                <!-- Content will be injected here by JavaScript -->
            </div>
            
            <div class="mt-12 text-center">
                 <a href="#" onclick="showSection('contact-section')" class="inline-flex items-center justify-center px-10 py-4 border border-transparent text-lg font-medium rounded-lg text-white bg-cyan-600 hover:bg-cyan-700 transition-colors duration-200 shadow-xl">
                    Get Started with a Consultation
                 </a>
            </div>
        </div>
    </section>
    
    <!-- 4. About Us Section (New) -->
    <section id="about-us-section" class="hidden py-16 md:py-24 px-4 bg-gray-100 min-h-screen">
        <div class="container mx-auto max-w-4xl">
            <h2 class="font-playfair text-4xl font-bold text-gray-800 mb-6 text-center">Our Commitment to Security</h2>
            <p class="text-xl text-gray-600 mb-8 text-center">
                Premier Insurance isn't just a brokerage; we are your dedicated risk management partner.
            </p>
            
            <div class="bg-white p-8 rounded-xl shadow-2xl border-t-8 border-cyan-500">
                <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                    Founded in 2005, our mission has been simple: to provide independent, unbiased, and transparent advice. We believe that true protection comes from understanding the *entire* risk landscape—not just selling a policy. Our team of certified consultants brings decades of experience across commercial, personal, and financial planning sectors, allowing us to offer holistic solutions that grow with you.
                </p>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center mt-8">
                    <div class="p-4 border rounded-lg bg-cyan-50/50">
                        <p class="text-4xl font-bold text-cyan-600">15+</p>
                        <p class="text-sm text-gray-500">Years of Experience</p>
                    </div>
                    <div class="p-4 border rounded-lg bg-cyan-50/50">
                        <p class="text-4xl font-bold text-cyan-600">98%</p>
                        <p class="text-sm text-gray-500">Client Retention Rate</p>
                    </div>
                    <div class="p-4 border rounded-lg bg-cyan-50/50">
                        <p class="text-4xl font-bold text-cyan-600">A+</p>
                        <p class="text-sm text-gray-500">Carrier Rating Access</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Contact Section (New) -->
    <section id="contact-section" class="hidden py-16 md:py-24 px-4 bg-white min-h-screen">
        <div class="container mx-auto max-w-3xl">
            <h2 class="font-playfair text-4xl font-bold text-gray-800 mb-6 text-center">Get in Touch</h2>
            <p class="text-xl text-gray-600 mb-10 text-center">
                We're ready to help you secure your future. Contact us today for a free risk assessment.
            </p>
            
            <div class="bg-gray-50 p-8 rounded-xl shadow-2xl">
                <form class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input type="text" id="name" name="name" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-cyan-500 focus:border-cyan-500">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" id="email" name="email" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-cyan-500 focus:border-cyan-500">
                    </div>
                    <div>
                        <label for="service" class="block text-sm font-medium text-gray-700">Interested Service</label>
                        <select id="service" name="service" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-cyan-500 focus:border-cyan-500 bg-white">
                            <option>General Inquiry</option>
                            <option>Personal Risk Review</option>
                            <option>Commercial Coverage</option>
                            <option>Employee Benefits</option>
                            <option>Financial Planning</option>
                        </select>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                        <textarea id="message" name="message" rows="4" class="mt-1 block w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:ring-cyan-500 focus:border-cyan-500"></textarea>
                    </div>
                    <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-lg font-medium text-white bg-cyan-600 hover:bg-cyan-700 transition-colors">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- 6. Footer -->
    <footer class="bg-gray-900 py-8">
        <div class="container mx-auto px-4 text-center text-gray-400">
            <p>&copy; <?php echo date("Y"); ?> Premier Insurance. All rights reserved.</p>
        </div>
    </footer>
    
    <script>
        // PHP array data converted to JavaScript object
        const SERVICES_DATA = <?php echo $services_json; ?>;
        
        // DOM Elements - UPDATED TO INCLUDE NEW SECTIONS
        const heroSection = document.getElementById('hero');
        const servicesListSection = document.getElementById('services-list');
        const serviceDetailsSection = document.getElementById('service-details');
        const aboutUsSection = document.getElementById('about-us-section'); 
        const contactSection = document.getElementById('contact-section');   
        const detailsContent = document.getElementById('details-content');
        
        /**
         * Simple function to switch between the main sections.
         * @param {string} sectionId - The ID of the section to show ('hero', 'services-list', 'service-details', 'about-us-section', or 'contact-section').
         */
        function showSection(sectionId) {
            // Array of all major sections
            const allSections = [
                heroSection, 
                servicesListSection, 
                serviceDetailsSection, 
                aboutUsSection, 
                contactSection
            ].filter(el => el !== null); // Filter out nulls just in case

            // 1. Hide all sections
            allSections.forEach(section => {
                section.classList.add('hidden');
            });

            // 2. Show the requested section
            const targetSection = document.getElementById(sectionId);
            if (targetSection) {
                targetSection.classList.remove('hidden');
                // Scroll to the top of the new section for a clean transition
                window.scrollTo({ top: 0, behavior: 'smooth' }); 
            }
        }

        /**
         * Renders the detailed view for a selected service.
         * @param {string} serviceKey - The unique key of the service (e.g., 'personal').
         */
        function showServiceDetails(serviceKey) {
            const service = SERVICES_DATA[serviceKey];
            if (!service) {
                console.error("Service not found for key:", serviceKey);
                return;
            }

            // Create the HTML content for the details view
            const contentHTML = `
                <div class="p-8 md:p-12 bg-gray-50 rounded-xl shadow-lg border border-cyan-100">
                    <div class="flex items-start mb-6">
                        <div class="p-4 rounded-full bg-cyan-500 text-white mr-6">
                            <svg class="w-10 h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="${service.icon_path}" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-cyan-600 uppercase tracking-wider font-semibold text-sm">Specialized Consulting</p>
                            <h2 class="font-playfair text-4xl md:text-5xl font-bold text-gray-900">${service.title}</h2>
                        </div>
                    </div>
                    
                    <!-- Full Description -->
                    <p class="text-lg text-gray-700 mb-8 leading-relaxed">${service.details}</p>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        
                        <!-- Key Benefits -->
                        <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-gray-400">
                            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Key Benefits</h3>
                            <ul class="space-y-3 text-gray-700 list-none p-0">
                                ${service.key_benefits.map(benefit => `
                                    <li class="flex items-start">
                                        <svg class="w-6 h-6 text-cyan-500 mr-2 flex-shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.001 12.001 0 002 15.464V18a2 2 0 002 2h16a2 2 0 002-2v-2.536a12.001 12.001 0 00-1.382-6.52Z" />
                                        </svg>
                                        <span>${benefit}</span>
                                    </li>
                                `).join('')}
                            </ul>
                        </div>

                        <!-- Client Scenario / Case Study -->
                        <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-gray-400">
                            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Real-World Scenario</h3>
                            <blockquote class="text-gray-700 italic border-l-4 border-cyan-500 pl-4 py-2">
                                "${service.scenario}"
                            </blockquote>
                            <p class="text-sm mt-4 text-gray-500">
                                - Example of our tailored approach
                            </p>
                        </div>
                    </div>
                </div>
            `;
            
            // Inject content and switch view
            detailsContent.innerHTML = contentHTML;
            showSection('service-details');
        }

        // Initial setup on load: Only show the hero section
        window.onload = function() {
            showSection('hero');
        }

    </script>
</body>
</html>
