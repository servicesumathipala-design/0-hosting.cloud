# 0-hosting.cloud V2ray Store Website

A modern, responsive website for V2ray/VPN services built with clean HTML, CSS, and JavaScript. Features server-specific package pages for Singapore, Mumbai, and Germany locations.

## Features

- **Responsive Design**: Works perfectly on desktop, tablet, and mobile devices
- **Modern UI/UX**: Clean, professional design with smooth animations
- **Server Locations**: Dedicated pages for Singapore, Mumbai, and Germany V2ray packages
- **Fast Loading**: Optimized for performance with minimal dependencies
- **SEO Optimized**: Proper meta tags and semantic HTML structure
- **Cross-browser Compatible**: Works on all modern browsers
- **Interactive Elements**: Smooth scrolling, animated counters, contact form
- **Security Headers**: Configured with security best practices

## File Structure

```
cloudnet-website-final/
├── index.html          # Main HTML file with server locations
├── singapore.html      # Singapore V2ray packages page
├── mumbai.html         # Mumbai V2ray packages page
├── germany.html        # Germany V2ray packages page
├── free-singapore.html # Dedicated page for Free Singapore V2ray plan
├── free-mumbai.html    # Dedicated page for Free Mumbai V2ray plan
├── free-germany.html   # Dedicated page for Free Germany V2ray plan
├── css/
│   └── styles.css      # Main stylesheet with server-specific styles
├── js/
│   └── main.js         # JavaScript functionality
├── images/             # Image assets directory
├── assets/             # Additional assets directory
├── .htaccess          # Apache configuration
├── robots.txt         # Search engine instructions
└── README.md          # This file
```

## New Features (Updated)

### Server Location Selection
- **Choose Your Server Location**: Replaced the pricing section with server location cards
- **Three Premium Locations**: Singapore, Mumbai, and Germany
- **Country Flags**: Visual representation with flag images from flagcdn.com
- **Regional Information**: Each server shows its geographical region and key features

### Server-Specific Package Pages
- **Singapore Packages**: Ultra-low latency packages for Southeast Asia
- **Mumbai Packages**: High-speed connectivity packages for South Asia  
- **Germany Packages**: EU data protection compliant packages for Central Europe
- **Unique Pricing**: Each location has tailored pricing and features
- **Technical Specifications**: Detailed server specs and protocol support

### Free Plan Redirection
- **Dedicated Free Plan Pages**: Clicking on a "Free" plan now redirects to a separate page for more details.
- **Example Content**: These pages can be customized to display specific information like "dialog zoom Rs.224.00" as per your example.

### Enhanced Styling
- **Server Cards**: Beautiful server location cards with hover effects
- **Flag Integration**: Country flags with proper styling and shadows
- **Hero Sections**: Dedicated hero sections for each server page
- **Feature Grids**: Organized display of server features and specifications
- **Responsive Design**: Mobile-optimized layouts for all new pages

## Deployment Instructions for CyberPanel

### 1. Upload Files
1. Log in to your CyberPanel dashboard
2. Go to "File Manager" or use FTP/SFTP
3. Navigate to your domain's public_html folder
4. Upload all files from the `cloudnet-website-final` folder
5. Ensure the file permissions are set correctly (644 for files, 755 for directories)

### 2. Domain Configuration
1. Make sure your domain is properly configured in CyberPanel
2. Ensure SSL certificate is installed for HTTPS (recommended)
3. If using HTTPS, uncomment the HTTPS redirect lines in `.htaccess`

### 3. Testing
1. Visit your domain in a web browser
2. Test navigation between server location pages
3. Check responsive design on mobile devices
4. Verify all server-specific package pages load correctly
5. Test the "View Packages" buttons from the main page
6. Test the "Choose Free" buttons to ensure they redirect to the correct free plan pages.

### 4. Customization

#### Update Server Information
- Edit server-specific HTML files to modify package details and pricing
- Update server specifications in the technical sections
- Modify server features and benefits as needed

#### Content Updates
- Edit `index.html` to modify main page content and server descriptions
- Update meta tags in each HTML file for SEO optimization
- Replace placeholder contact information with actual details
- Customize the content of `free-singapore.html`, `free-mumbai.html`, and `free-germany.html` to display specific free plan details.

#### Styling
- Modify `css/styles.css` to change colors, fonts, and layout
- Update server-specific styling in the new CSS sections
- Adjust flag images or server card designs as needed

#### Functionality
- Edit `js/main.js` to modify interactive behavior
- Integrate with actual payment processing for package selection
- Connect contact forms to email service or backend API

### 5. Performance Optimization

The website is already optimized with:
- Minified and compressed assets
- Browser caching via `.htaccess`
- Efficient CSS and JavaScript
- Optimized flag images from CDN
- Responsive image loading

### 6. Security Considerations

- The `.htaccess` file includes security headers
- Sensitive files are protected from direct access
- Form validation is implemented client-side
- Consider adding server-side form processing and validation
- Flag images are loaded from trusted CDN (flagcdn.com)

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Dependencies

- Google Fonts (Inter font family)
- Font Awesome icons (CDN)
- Flag images from flagcdn.com
- No other external dependencies

## Server Pages Navigation

- **Main Page**: Contains server location selection cards
- **Singapore Page**: `/singapore.html` - Southeast Asia packages
- **Mumbai Page**: `/mumbai.html` - South Asia packages  
- **Germany Page**: `/germany.html` - Central Europe packages
- **Free Singapore Page**: `/free-singapore.html` - Details for Free Singapore plan
- **Free Mumbai Page**: `/free-mumbai.html` - Details for Free Mumbai plan
- **Free Germany Page**: `/free-germany.html` - Details for Free Germany plan
- **Navigation**: Each server page links back to main page and other servers

## Package Information

### Singapore Server
- **Location**: Southeast Asia
- **Latency**: <10ms
- **Packages**: Free ($0.00), Basic ($9.99), Pro ($19.99)
- **Features**: Ultra-low latency, 24/7 monitoring, multiple protocols

### Mumbai Server
- **Location**: South Asia
- **Latency**: <15ms
- **Packages**: Free ($0.00), Basic ($8.99), Pro ($17.99)
- **Features**: High-speed connectivity, premium support, regional optimization

### Germany Server
- **Location**: Central Europe
- **Latency**: <20ms
- **Packages**: Free ($0.00), Basic ($10.99), Pro ($21.99)
- **Features**: EU data protection, GDPR compliance, privacy-first approach

## Contact Form Integration

The contact form currently shows a success message for demonstration. To make it functional:

1. Create a server-side script (PHP, Node.js, etc.) to handle form submissions
2. Update the form action in each HTML file
3. Implement server-side validation and email sending
4. Consider using services like Formspree, Netlify Forms, or EmailJS for easy integration

## Maintenance

- Regularly update server information and pricing
- Monitor website performance and loading times
- Keep security headers and configurations up to date
- Test functionality after any CyberPanel or server updates
- Update flag images if needed (currently using flagcdn.com)

## Support

For technical support or customization requests, please refer to the website documentation or contact your web developer.

---

**Note**: This website now features dedicated server location pages and is fully optimized for CyberPanel hosting environments. The new structure allows users to easily browse and select V2ray packages based on their preferred server location.



