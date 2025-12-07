# Student Portal - Learning Platform

A comprehensive learning management system built for the University of Zakho, providing students with access to courses, articles, and educational resources.

## Prerequisites
this is an open source project where students. 
To run this DDEV-based WordPress site locally, you'll need the following installed on your machine:

### Required Software

1. **Docker Desktop** (v4.0 or higher)
   - Windows: [Download Docker Desktop for Windows](https://www.docker.com/products/docker-desktop)
   - Ensure WSL2 is enabled and configured
   - Allocate at least 4GB RAM to Docker

2. **DDEV** (v1.21 or higher)
   - Install via Chocolatey (Windows): `choco install ddev`
   - Or download from: https://ddev.readthedocs.io/en/stable/users/install/ddev-installation/

3. **Git** (for version control)
   - Download from: https://git-scm.com/downloads

### Optional but Recommended

- **VS Code** with PHP and WordPress extensions
- **TablePlus** or similar database management tool

## Getting Started

### Initial Setup

1. **Clone the repository:**
2. you don't need the below link it's for somebody who wants to use git to download and run the site locally on their machince
   ```bash
   git clone <repository-url>
   cd thirdAttempt
   ```

3. **Start DDEV:**
   ```bash
   ddev start
   ```

4. **Import the database** (if you have a backup):
   ```bash
   ddev import-db --src=backup.sql.gz
   ```

5. **Access the site:**
   - Frontend: https://thirdattempt.ddev.site
   - Admin Panel: https://thirdattempt.ddev.site/wp-admin
   - Default credentials: admin / [your-password]

### Daily Development Workflow

```bash
# Start the project
ddev start

# SSH into the container
ddev ssh

# Run WP-CLI commands
ddev wp plugin list
ddev wp theme list

# Stop the project
ddev stop
```

## Site Structure

### Theme
- **GeneratePress 3.6.1** (Customized)
  - Custom footer with university branding
  - Modified color scheme to match University of Zakho
  - Custom page templates (About Us)
  - Archive templates for courses and articles

### Custom Plugin: Learning Platform v1.0.0

```
wp-content/plugins/learning-platform/
│
├── assets/
│   └── css/
│       └── main.css              # Global styles
│
├── components/
│   └── content-card.css          # Unified card component
│
├── includes/
│   ├── post-types.php            # Custom post types (lp_course, lp_article)
│   ├── taxonomies.php            # Custom taxonomies
│   ├── functions.php             # Core functionality
│   └── enqueue.php               # Asset management
│
├── pages/
│   ├── home/                     # Homepage styles
│   ├── courses/                  # Courses page
│   ├── articles/                 # Articles page
│   ├── portal/                   # User portal (My Portal)
│   ├── profile/                  # User profiles
│   ├── auth/                     # Authentication
│   └── single/                   # Single post templates
│
└── learning-platform.php         # Main plugin file
```

### Custom Post Types

1. **Articles (`lp_article`)**
   - Educational articles and tutorials
   - Taxonomy: `article_category`
   - Features: Author info, reading time, save/bookmark

2. **Courses (`lp_course`)**
   - Structured learning courses
   - Taxonomy: `course_category`
   - Features: Course sections, progress tracking, enrollment

### Key Features

- **User Authentication & Profiles**
  - Custom login/registration
  - User profiles with avatar upload
  - Saved articles and enrolled courses

- **Content Management**
  - Responsive card-based layouts
  - Category filtering
  - Featured thumbnails with fallback gradients
  - Author attribution

- **Navigation**
  - Active page indicators
  - Consistent header/footer across all pages
  - Mobile-responsive design

## Design System

### Color Palette (University of Zakho)

```css
/* Primary Blue */
--primary-blue: #2563eb;
--primary-blue-dark: #1d4ed8;
--primary-blue-darker: #1e40af;

/* Gold Accents */
--gold: #fbbf24;
--gold-light: #fef3c7;

/* Backgrounds */
--bg-primary: #fefce8;        /* Warm yellowish off-white */
--bg-card: linear-gradient(135deg, #fefce8 0%, #fef3c7 100%);

/* Text */
--text-primary: #1f2937;
--text-secondary: #475569;
```

### Typography

- **Headings**: System fonts (San Francisco, Segoe UI)
- **Body**: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto
- **Responsive**: Fluid typography scales with viewport

## Our Mission

### Vision

The Student Portal serves as a digital bridge between the University of Zakho's academic excellence and its students' learning journey. Our platform is designed to democratize access to quality educational content while maintaining the highest standards of academic integrity.

### Goals

1. **Accessibility**: Provide 24/7 access to courses and learning materials for all students
2. **Engagement**: Foster active learning through interactive content and progress tracking
3. **Community**: Build a collaborative learning environment where students can share knowledge
4. **Innovation**: Leverage modern web technologies to enhance the learning experience
5. **Scalability**: Create a foundation that can grow with the university's needs

### Target Audience

- **Students**: Access courses, track progress, save resources
- **Instructors**: (Future) Upload content, manage courses, monitor student engagement
- **Administrators**: (Future) Oversee platform operations, generate reports

## Development

This project was developed through an iterative approach:

1. **Foundation**: WordPress + DDEV setup with custom plugin architecture
2. **Content Structure**: Custom post types and taxonomies for flexible content management
3. **Design Implementation**: University branding, responsive layouts, and unified component system
4. **User Features**: Authentication, profiles, bookmarking,
5.  **Optimization**: Performance tuning, code organization, and accessibility improvements

### Technology Stack

- **CMS**: WordPress 6.9
- **Theme**: GeneratePress 3.6.1 (Customized)
- **Development Environment**: DDEV (Docker-based)
- **Languages**: PHP 8.x, CSS3, JavaScript (ES6+)
- **Database**: MySQL 8.0

## Contributing

### Development Guidelines

1. Follow WordPress coding standards
2. Maintain consistent color scheme (University of Zakho colors)
3. Ensure responsive design across all breakpoints
4. Test on multiple browsers (Chrome,Edge)
5. Keep accessibility in mind

### File Modification

When editing:
- Theme files: `wp-content/themes/generatepress/`
- Plugin files: `wp-content/plugins/learning-platform/`
- Always test changes in development before production

## Troubleshooting

### Common Issues

**DDEV won't start:**
```bash
ddev poweroff
ddev start
```

**Database connection errors:**
```bash
ddev restart
```

**Permission issues:**
```bash
ddev ssh
sudo chown -R www-data:www-data /var/www/html/wp-content
```

**Clear cache:**
```bash
ddev wp cache flush
```

## Future Enhancements

- [ ] Course completion certificates
- [ ] Discussion forums for each course
- [ ] Live video streaming integration
- [ ] Mobile app (flutter)
- [ ] Multi-language support (Kurdish, Arabic, English)
- [ ] Gamification (badges, leaderboards)

## Credits

**Developer**: Zerevan Khalil  
**Institution**: University of Zakho  
**Support**: Aras Ramazan, Moshi Khaei  
**Year**: 2025

## License

This project is proprietary software developed for the University of Zakho.

---

For questions or support, please contact the development team.
