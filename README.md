# beauli.de — BEAULI™ Academy Website

[![License: MIT](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)
![Last Commit](https://img.shields.io/github/last-commit/uxbyweng/beauli.de/main)
![Repo Size](https://img.shields.io/github/repo-size/uxbyweng/beauli.de)
![Workflow Status](https://img.shields.io/github/actions/workflow/status/uxbyweng/beauli.de/fast-deploy.yml?branch=main&label=deploy)

Official website of the **BEAULI™ Academy**, hosted by [Park-Klinik Birkenwerder](https://www.park-klinik-birkenwerder.de/).  
Provides information on the BEAULI™ method, upcoming symposia, and the BEAULI™ Academy program.  
Focus on clarity, accessibility, and performance.

Live: [beauli.de](https://beauli.de/)  
Maintainer (Web Development): Karsten Weng · [LinkedIn](https://www.linkedin.com/in/kweng/)  
Responsible organization: Park-Klinik Birkenwerder  
Last update: 01.10.2025

## Stack

-   Frontend: Bootstrap 4 (customized), Vanilla JavaScript
-   Backend: PHP 8+ (includes/partials, forms)
-   Forms: Contact & registration forms with validation and spam protection (honeypot, captcha)
-   Hosting: Apache web server with mod_rewrite support

## Structure (excerpt)

```text
accommodation/      # accommodation info
beauli/             # about BEAULI method
contact/            # contact form
css/                # stylesheets
doctors/            # faculty and doctors
downloads/          # PDF downloads
error/              # error pages (401, 403, 404)
images/             # image assets
include/            # PHP partials (header, footer, blocks)
js/                 # JavaScript files
legal-notices/      # imprint & legal info
partner/            # partner clinics
privacy-policy/     # GDPR/privacy policy
program/            # academy program
register/           # registration form
science/            # scientific background
.htaccess           # rewrites, caching, error handling

## License
- Code: MIT
- Content/Design/Images: © Park-Klinik Birkenwerder

## Contact
- Maintainer (Web Development): Karsten Weng · Berlin
- LinkedIn: [kweng](https://www.linkedin.com/in/kweng/)
- Organization: [Park-Klinik Birkenwerder](https://www.park-klinik-birkenwerder.de/)
- [info@beauli.de](mailto:info@beauli.de)
```
