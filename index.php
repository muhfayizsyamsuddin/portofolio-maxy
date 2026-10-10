<?php

// ======================================================
// TASK 1 - PHP VARIABLES
// ======================================================

$nama = "Muh. Fayiz Syamsuddin";
$role = "Full-Stack Developer";

$bio = "Passionate about creating innovative web solutions and transforming ideas into seamless, user-friendly applications.";
$bioFormatted = str_replace(
    [
        "innovative web solutions",
        "seamless, user-friendly applications."
    ],
    [
        '<span class="font-medium text-foreground hero-description-bold-1">innovative web solutions</span>',
        '<span class="font-medium text-foreground hero-description-bold-2">seamless, user-friendly applications.</span>'
    ],
    htmlspecialchars($bio)
);

$github = "https://github.com/muhfayizsyamsuddin";
$linkedin = "https://linkedin.com/in/muh-fayiz-syamsuddin";
$instagram = "https://instagram.com/faizms14_";
$email = "muhfayiz14@gmail.com";

$open_to_work = true;


// ======================================================
// TASK 2 - SKILL ARRAY
// ======================================================

$skill_categories = [
    [
        "category" => "Frontend",
        "skills" => [
            "React.js",
            "Next.js",
            "React Native",
            "Tailwind CSS",
            "HTML5",
            "CSS3",
            "Apollo Client"
        ]
    ],
    [
        "category" => "Backend",
        "skills" => [
            "Node.js",
            "Express.js",
            "Sequelize ORM",
            "Prisma ORM",
            "RESTful APIs",
            "GraphQL",
            "Apollo Server",
            "RabbitMQ"
        ]
    ],
    [
        "category" => "Database & Cloud",
        "skills" => [
            "PostgreSQL",
            "MongoDB",
            "Redis",
            "Supabase",
            "Cloudinary",
            "AWS EC2",
            "Vercel"
        ]
    ],
    [
        "category" => "Programming Languages",
        "skills" => [
            "JavaScript",
            "TypeScript",
        ]
    ],
    [
        "category" => "Development Tools & Deployment",
        "skills" => [
            "Git & GitHub",
            "Docker",
            "GitHub Actions (CI/CD)",
            "Traefik",
            "Nginx",
            "Postman"
        ]
    ]
];


// ======================================================
// PROJECT DATA
// ======================================================

$projects = [
    [
        "title" => "Opsora",
        "description" => "Enterprise business operations management system covering inventory, purchasing, sales, HR, attendance, payroll, performance reviews, reporting, and role-based administration.",
        "tech" => [
            "Next.js",
            "Tailwind CSS",
            "TypeScript",
            "Node.js",
            "Express.js",
            "PostgreSQL",
            "Prisma ORM",
            "Docker",
            "Cloudinary",
            "GitHub Actions (CI/CD)",
            "Traefik"
        ],
        "github" => "https://github.com/muhfayizsyamsuddin/opsora",
        "demo" => "https://opsora.faizms.com",
        "image" => "public/opsora-logo.png",
        "category" => "Fullstack",
        "featured" => true,
        "badge" => ""
    ],
    [
        "title" => "Click Booth App",
        "description" => "A comprehensive web-based photobooth application with AI integration, payment processing, and cloud storage capabilities.",
        "tech" => [
            "TypeScript",
            "Next.js",
            "Next.js Route Handlers",
            "MongoDB",
            "Tailwind CSS",
            "OpenAI",
            "Midtrans",
            "Fonnte",
            "Cloudinary",
            "Docker",
            "GitHub Actions (CI/CD)",
            "Traefik"
        ],
        "github" => "https://github.com/muhfayizsyamsuddin/Click-Booth",
        "demo" => "https://clickbooth.faizms.com",
        "image" => "public/logo.png",
        "category" => "Fullstack",
        "featured" => true,
        "badge" => ""
    ],
    [
        "title" => "Next Balance App",
        "description" => "Modern e-commerce platform inspired by NewBalance, featuring product catalog, wishlist management, and responsive design.",
        "tech" => [
            "TypeScript",
            "Next.js",
            "Next.js Route Handlers",
            "MongoDB",
            "Tailwind CSS",
            "Docker",
            "Traefik",
            "GitHub Actions (CI/CD)"
        ],
        "github" => "https://github.com/muhfayizsyamsuddin/Next-Balance",
        "demo" => "https://nextbalance.faizms.com",
        "image" => "public/nb.png",
        "category" => "Fullstack",
        "featured" => true,
        "badge" => ""
    ],
    [
        "title" => "Denver Build",
        "description" => "Responsive construction company website with a custom admin CMS for managing company information, services, projects, galleries, testimonials, inquiries, SEO metadata, and site settings.",
        "tech" => [
            "Next.js",
            "TypeScript",
            "Tailwind CSS",
            "PostgreSQL",
            "Prisma ORM",
            "Zod",
            "Cloudinary",
            "Docker",
            "Traefik",
            "GitHub Actions (CI/CD)"
        ],
        "github" => "https://github.com/muhfayizsyamsuddin/denver-build",
        "demo" => "https://denverbuild.faizms.com",
        "image" => "public/denverbuild.png",
        "category" => "Fullstack",
        "featured" => true,
        "badge" => ""
    ],
    [
        "title" => "Photography Booking System",
        "description" => "Photography service platform featuring a portfolio, service packages, online booking requests, and booking management workflows.",
        "tech" => [
            "Next.js",
            "TypeScript",
            "Tailwind CSS",
            "PostgreSQL",
            "Prisma ORM",
            "Zod",
            "Cloudinary",
            "Docker",
            "Traefik",
            "GitHub Actions (CI/CD)"
        ],
        "github" => "https://github.com/muhfayizsyamsuddin/photography-booking-system",
        "demo" => "https://photobooth.faizms.com",
        "image" => "public/photography-booking-system.png",
        "category" => "Fullstack",
        "featured" => false,
        "badge" => ""
    ],
    [
        "title" => "Sportify Court App",
        "description" => "Sports field booking platform with payment integration and real-time availability checking.",
        "tech" => [
            "Node.js",
            "JavaScript",
            "Express.js",
            "PostgreSQL",
            "React.js",
            "Midtrans",
            "GeminiAI",
            "Bootstrap",
            "Docker",
            "GitHub Actions (CI/CD)",
            "Traefik"
        ],
        "github" => "https://github.com/muhfayizsyamsuddin/Sportify-Court",
        "demo" => "https://sportifycourt.faizms.com",
        "image" => "public/Sportify-Court.png",
        "category" => "Fullstack",
        "featured" => false,
        "badge" => ""
    ],
    [
        "title" => "Smart Chat App",
        "description" => "Real-time chat platform with AI integration, multiple room support, and Socket.IO for instant messaging.",
        "tech" => [
            "Node.js",
            "JavaScript",
            "Express.js",
            "PostgreSQL",
            "React.js",
            "Socket.io",
            "Vite",
            "GeminiAI",
            "Docker",
            "Traefik",
            "GitHub Actions (CI/CD)"
        ],
        "github" => "https://github.com/muhfayizsyamsuddin/Smart-Chat-Client",
        "demo" => "https://smartchat.faizms.com",
        "image" => "public/smart-chat.png",
        "category" => "Fullstack",
        "featured" => false,
        "badge" => ""
    ],
    [
        "title" => "SIO App - Microservices",
        "description" => "Re-engineered a monolithic restaurant ordering application into a microservices architecture, replacing the EJS frontend with React and introducing modular services, asynchronous communication, and containerized deployment.",
        "tech" => [
            "Node.js",
            "JavaScript",
            "Express.js",
            "Sequelize",
            "PostgreSQL",
            "React.js",
            "Tailwind CSS",
            "RabbitMQ",
            "Traefik",
            "PDFKit",
            "Docker",
            "GitHub Actions (CI/CD)",
        ],
        "github" => "https://github.com/muhfayizsyamsuddin/SIO-deployment",
        "demo" => "https://sioms.faizms.com",
        "image" => "public/sio.png",
        "category" => "Fullstack",
        "featured" => true,
        "badge" => "Microservices"
    ],
    [
        "title" => "My Social Media App",
        "description" => "Cross-platform social media application with real-time messaging, user profiles, following/followers and GraphQL API.",
        "tech" => [
            "GraphQL",
            "TypeScript",
            "MongoDB",
            "Apollo Server-client",
            "React Native",
            "Expo",
            "Tailwind CSS",
            "Docker",
            "Traefik",
            "GitHub Actions (CI/CD)"
        ],
        "github" => "https://github.com/muhfayizsyamsuddin/My-Social-Media-App",
        "demo" => "#",
        "image" => "public/mysocialmediaapp.png",
        "category" => "Fullstack",
        "featured" => true,
        "badge" => ""
    ],
    [
        "title" => "Furniqo",
        "description" => "Furniture e-commerce platform with user profiles, product management, and modern UI/UX design.",
        "tech" => [
            "Node.js",
            "JavaScript",
            "Express.js",
            "PostgreSQL",
            "React.js",
            "Bootstrap",
            "Docker",
            "Traefik",
            "GitHub Actions (CI/CD)"
        ],
        "github" => "https://github.com/muhfayizsyamsuddin/Furniqo-App-Client",
        "demo" => "https://furniqo.faizms.com",
        "image" => "public/furniqo.png",
        "category" => "Fullstack",
        "featured" => false,
        "badge" => ""
    ],
    [
        "title" => "SIO App",
        "description" => "A web based application for ordering food and drinks in restaurants.",
        "tech" => [
            "Node.js",
            "JavaScript",
            "Express.js",
            "Sequelize",
            "PostgreSQL",
            "EJS",
            "Docker",
            "GitHub Actions (CI/CD)",
            "Traefik"
        ],
        "github" => "https://github.com/muhfayizsyamsuddin/SIO-APP",
        "demo" => "https://sioapp.faizms.com",
        "image" => "public/sio.png",
        "category" => "Fullstack",
        "featured" => false,
        "badge" => ""
    ],
    [
        "title" => "Toride Store",
        "description" => "A web based e-commerce app for selling Japanese sports products.",
        "tech" => [
            "JavaScript",
            "HTML",
            "CSS",
            "Bootstrap",
            "Docker",
            "Traefik",
            "GitHub Actions (CI/CD)"
        ],
        "github" => "https://github.com/muhfayizsyamsuddin/Toride-Store-Web",
        "demo" => "https://toridestore.faizms.com",
        "image" => "public/toride.png",
        "category" => "Frontend",
        "featured" => false,
        "badge" => ""
    ],
    [
        "title" => "Prelo App",
        "description" => "Web-based e-commerce application for used goods with a shopping cart feature.",
        "tech" => [
            "JavaScript",
            "HTML",
            "CSS",
            "Bootstrap",
            "Docker",
            "Traefik",
            "GitHub Actions (CI/CD)"
        ],
        "github" => "https://github.com/muhfayizsyamsuddin/prelo-app",
        "demo" => "https://preloapp.faizms.com",
        "image" => "public/preloapp.png",
        "category" => "Frontend",
        "featured" => false,
        "badge" => ""
    ]
];


// ======================================================
// EXPERIENCE DATA
// ======================================================

$experiences = [
    [
        "type" => "training",
        "title" => "Docker and Microservices",
        "company" => "Screenesia",
        "location" => "Makassar, Sulawesi Selatan, Indonesia",
        "duration" => "Jun 2026 - Aug 2026",
        "description" => "Completed a 28 JP technical training program focused on Docker, containerization, and microservices architecture through hands-on learning and a capstone project.",
        "impact" => [
            "Learned Docker fundamentals, Dockerfile, volumes, networks, and Docker Compose best practices",
            "Built RESTful microservices with API Gateway, service discovery, and asynchronous communication using message brokers",
            "Studied authentication and authorization, resilience patterns, observability, and Kubernetes fundamentals",
            "Applied CI/CD concepts for microservices and completed a capstone project"
        ],
        "technologies" => [
            "Docker",
            "Docker Compose",
            "Microservices",
            "RESTful APIs",
            "API Gateway",
            "RabbitMQ",
            "Kubernetes",
            "CI/CD",
            "Observability"
        ]
    ],
    [
        "type" => "internship",
        "title" => "Frontend Developer",
        "company" => "Promptive",
        "location" => "Bekasi, Jawa Barat, Indonesia",
        "duration" => "Oct 2025 - Dec 2025",
        "description" => "Developed and maintained responsive web applications using modern frontend technologies. Collaborated with design and backend teams to deliver high-quality user experiences.",
        "impact" => [
            "Improved application performance by 40% through code optimization and efficient resource management",
            "Implemented new features that increased user engagement by 25%",
            "Participated in code reviews and mentored junior developers, contributing to a more robust development process"
        ],
        "technologies" => [
            "HTML",
            "CSS",
            "JavaScript",
            "React.js",
            "Tailwind CSS",
            "Figma",
            "Git"
        ]
    ],
    [
        "type" => "education",
        "title" => "Fullstack JavaScript Immersive",
        "company" => "Hacktiv8 Indonesia",
        "location" => "Jakarta Selatan, DKI Jakarta, Indonesia",
        "duration" => "Apr 2025 - Aug 2025",
        "description" => "Completed Fullstack JavaScript Immersive program with a focus on modern web and mobile development. Gained strong foundation in programming fundamentals and database management.",
        "impact" => [
            "Successfully built and deployed multiple fullstack applications within project deadlines",
            "Collaborated in agile team projects simulating real-world software development environments",
            "Strengthened problem-solving skills through daily coding challenges and pair programming",
            "Graduated from one of Indonesia’s top coding bootcamps with industry-ready skills",
            "Applied critical thinking and analytical skills to solve real-world technical challenges",
            "Cultivated a growth mindset and proactive learning attitude for continuous improvement"
        ],
        "technologies" => [
            "JavaScript",
            "TypeScript",
            "Node.js",
            "Express.js",
            "Next.js",
            "React.js",
            "React Native",
            "MongoDB",
            "GraphQL",
            "PostgreSQL",
            "Supabase",
            "Sequelize ORM",
            "RESTful APIs",
            "NoSQL Databases",
            "Apollo Server & Client",
            "HTML5/CSS3"
        ]
    ],
    [
        "type" => "education",
        "title" => "Bachelor of Agricultural Technology",
        "company" => "Universitas Hasanuddin",
        "location" => "Makassar, Sulawesi Selatan",
        "duration" => "2020 - 2024",
        "description" => "Experienced in applying problem-solving, teamwork, and analytical skills to real-world projects such as monitoring systems, automation, and decision-support systems.",
        "impact" => [
            "Maintaining excellent academic performance with GPA: 3.72/4.0",
            "Participated in programming competitions, enhancing problem-solving and critical thinking",
            "Collaborated in research and projects involving IoT, AI, and automation systems, improving teamwork and adaptability",
            "Applied analytical and communication skills in preparing technical reports and presentations"
        ],
        "technologies" => [
            "C++",
            "Artificial Intelligence",
            "Instrumentation",
            "Internet of Things (IoT)",
            "Monitoring System",
            "Automatic Control System",
            "Fuzzy Logic Systems",
            "Expert Systems"
        ]
    ],
    [
        "type" => "internship",
        "title" => "Assistant Supervisor",
        "company" => "Agricultural Extension Center",
        "location" => "Sidenreng Rappang, Sulawesi Selatan, Indonesia",
        "duration" => "Jan 2023 - Feb 2023",
        "description" => "Supported the development and execution of agricultural programs by collaborating with supervisors and local farmers. Focused on knowledge transfer, problem-solving, and data-driven approaches to improve crop yields and promote sustainable practices.",
        "impact" => [
            "Increased crop yields by an average of 30% through structured training and data-driven recommendations",
            "Designed and distributed educational materials to promote sustainable farming practices",
            "Facilitated interactive workshops for over 100 local farmers, enhancing communication and leadership skills"
        ],
        "technologies" => [
            "Agricultural Practices",
            "Community Outreach"
        ]
    ]
];


// ======================================================
// TASK 5 - RENDER PROJECT CARD
// ======================================================

function getProjectCategoryLabel($category)
{
    // TASK 7 - SWITCH

    switch ($category) {
        case "Frontend":
            return "Frontend";

        case "Backend":
            return "Backend";

        case "Fullstack":
            return "Fullstack";

        default:
            return "Other";
    }
}


function renderProjectCard(
    $title,
    $description,
    $tech,
    $github,
    $demo,
    $image,
    $category,
    $featured = false,
    $badge = "",
    $hidden = false
) {
    $hiddenClass = $hidden ? "hidden project-extra" : "";

    echo '
    <article
        class="' . $hiddenClass . '
            group
            hover:shadow-xl
            hover:shadow-primary/10
            transition-all duration-500
            hover:-translate-y-1
            border border-border/50
            hover:border-primary/40
            focus-within:ring-2
            focus-within:ring-primary
            focus-within:ring-offset-2
            h-full
            bg-card/50
            backdrop-blur-sm
            flex flex-col
            gap-6
            overflow-hidden
            rounded-xl
            py-6
            shadow-sm"
    >

        <!-- Project Image -->
        <div
            class="aspect-video relative
                bg-primary/5
                overflow-hidden
                rounded-t-lg"
        >

            <img
                src="' . htmlspecialchars($image) . '"
                alt="Screenshot of ' . htmlspecialchars($title) . ' project showing the main interface"
                loading="lazy"
                class="w-full h-full
                        transition-transform duration-700
                        group-hover:scale-105
                       ' . ($title === "Opsora"
                           ? "object-contain bg-white scale-110"
                           : "object-cover") . '"
            >';

            /*
             * Portfolio asli:
             * Featured badge masih di-comment.
             * Jadi kita tidak menampilkannya.
             */

            if ($badge !== "") {
                echo '
                <div class="absolute top-3 right-3">

                    <span
                        class="inline-flex items-center
                                bg-primary
                                text-white
                                text-xs
                                font-semibold
                                shadow-lg
                                border border-primary
                                px-3 py-1
                                rounded-md"
                    >
                        ' . htmlspecialchars($badge) . '
                    </span>

                </div>';
            }

    echo '
        </div>

        <!-- Card Header -->
        <div class="grid gap-1.5 px-6 pb-3">

            <div class="flex items-start justify-between gap-3">

                <h3
                    class="min-w-0 flex-1 text-lg
                        text-foreground
                        group-hover:text-primary
                        transition-colors
                        font-semibold"
                >
                    ' . htmlspecialchars($title) . '
                </h3>

                <span
                    class="shrink-0 inline-flex items-center
                        -mt-1.5
                        rounded-md
                        border border-primary/30
                        bg-primary/5
                        px-2 py-1
                        text-[10px] sm:text-xs
                        font-medium text-primary
                        whitespace-nowrap"
                >
                    ' . htmlspecialchars(
                        getProjectCategoryLabel($category),
                        ENT_QUOTES,
                        'UTF-8'
                    ) . '
                </span>

            </div>

            <p
                class="text-sm
                       text-muted-foreground
                       leading-relaxed"
            >
                ' . htmlspecialchars($description) . '
            </p>

        </div>

        <!-- Card Content -->
        <div
            class="px-6 pt-0
                space-y-4
                flex-1
                flex flex-col"
        >

            <!-- Technologies -->
            <div
                class="flex flex-wrap gap-1.5
                       items-start
                       content-start
                       min-h-[80px]"
            >';

            foreach ($tech as $item) {
                echo '
                <span
                    class="inline-flex items-center gap-1
                        text-xs py-1.5 px-2.5
                        bg-background/60
                        backdrop-blur-sm
                        border border-border/50
                        hover:border-primary/40
                        hover:bg-primary/5
                        rounded-md
                        text-primary
                        h-7 min-w-fit
                        whitespace-nowrap
                        transition-all duration-300"
                >
                    <i
                        data-lucide="code"
                        class="h-3 w-3 flex-shrink-0"
                    ></i>

                    ' . htmlspecialchars($item) . '
                </span>';
            }

    echo '
            </div>

            <!-- Button -->
            <div class="mt-auto pt-4">

                <a
                    href="' . htmlspecialchars(
                        $demo !== "#" ? $demo : $github
                    ) . '"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="h-8
                        w-full
                        inline-flex
                        items-center
                        justify-center
                        gap-1.5
                        px-3
                        rounded-md
                        text-xs
                        font-medium
                        bg-[#009fe3]
                        text-[#061018]
                        hover:bg-[#008dcc]
                        hover:shadow-lg
                        hover:shadow-[0_10px_25px_rgba(0,159,227,0.25)]
                        focus:ring-2
                        focus:ring-primary
                        focus:ring-offset-2
                        transition-all duration-300"
                >

                    <i
                        data-lucide="' . (
                            $demo !== "#"
                                ? "external-link"
                                : "github"
                        ) . '"
                        class="h-3.5 w-3.5"
                    ></i>

                    ' . (
                        $demo !== "#"
                            ? "View Project"
                            : "View Code"
                    ) . '

                </a>

            </div>

        </div>

    </article>';
}


// ======================================================
// TASK 6 - FUNCTION CALLING ANOTHER FUNCTION
// ======================================================

function renderPortfolioSection($title, $items)
{
    echo '
    <section
        id="projects"
        class="py-16 px-4 scroll-mt-16
            bg-gradient-to-b
            from-[#0c0f1f]
            via-[#0b1020]
            to-[#090c0f]"
    >

        <div class="max-w-7xl mx-auto">

            <!-- Heading -->
            <div class="text-center mb-12">

                <h2
                    id="projects-heading"
                    class="text-4xl md:text-5xl
                           font-bold
                           text-foreground
                           mb-4"
                >
                    ' . htmlspecialchars($title) . '
                </h2>

                <p
                    class="text-lg
                           text-muted-foreground
                           text-pretty
                           max-w-2xl
                           mx-auto"
                >
                    Selected full-stack projects demonstrating
                    production deployment, scalable backend architecture,
                    modern frontend development, and real-world business workflows.
                </p>

            </div>

            <!-- Projects Grid -->
            <div
                id="projects-grid"
                class="grid
                       grid-cols-1
                       md:grid-cols-2
                       lg:grid-cols-3
                       gap-6"
            >';

    foreach ($items as $index => $item) {

        renderProjectCard(
            $item["title"],
            $item["description"],
            $item["tech"],
            $item["github"],
            $item["demo"],
            $item["image"],
            $item["category"],
            $item["featured"],
            $item["badge"],
            $index >= 6
        );
    }

    echo '
            </div>

            <!-- Show All Projects -->
            <div class="flex justify-center mt-10">

                <button
                    type="button"
                    id="show-all-projects"
                    class="h-9
                        px-6
                        rounded-lg
                        border border-[#303343]
                        bg-[#191c2a]
                        text-foreground
                        text-sm
                        font-medium
                        shadow-xs
                        hover:bg-primary/10
                        hover:text-primary
                        hover:border-primary
                        hover:-translate-y-0.5
                        hover:shadow-md
                        hover:shadow-primary/10
                        active:scale-[0.98]
                        transition-all duration-300"
                >
                    Show All Projects
                </button>

            </div>

            <!-- DEVELOPER INSIGHTS -->
            <div class="mt-20 border-t border-white/5 pt-16" id="project-insights">

                <div class="w-full">

                    <!-- Heading -->
                    <div class="mx-auto mb-12 max-w-3xl text-center">

                        <p class="mb-3 text-sm font-medium uppercase tracking-[0.2em] text-sky-500">
                            Project Insights
                        </p>

                        <h2 class="text-3xl font-semibold tracking-tight text-white md:text-4xl">
                            Project analytics &amp; technology overview
                        </h2>

                        <p class="mx-auto mt-4 max-w-2xl text-base leading-7 text-slate-400">
                            A visual overview of the technologies and categories
                            represented across my projects.
                        </p>

                    </div>

                    <!-- Charts Grid -->
                    <div class="grid gap-6 lg:grid-cols-2">

                        <!-- Technology Usage -->
                        <div class="rounded-xl border border-white/10 bg-[#11131d] p-6
                                transition-all duration-500
                                hover:border-primary/30
                                hover:shadow-lg hover:shadow-primary/5">

                            <div class="mb-6">
                                <h3 class="text-lg font-semibold text-white">
                                    Technology Usage Across Projects
                                </h3>

                                <p class="mt-1 text-sm text-slate-400">
                                    Number of projects using each technology.
                                </p>
                            </div>

                            <div class="h-[350px] sm:h-[380px] lg:h-[420px]">
                                <canvas id="technology-usage-chart"></canvas>
                            </div>

                        </div>

                        <!-- Project Distribution -->
                        <div class="rounded-xl border border-white/10 bg-[#11131d] p-6
                                transition-all duration-500
                                hover:border-primary/30
                                hover:shadow-lg hover:shadow-primary/5">

                            <div class="mb-6">
                                <h3 class="text-lg font-semibold text-white">
                                    Project Distribution
                                </h3>

                                <p class="mt-1 text-sm text-slate-400">
                                    Distribution of projects by application category.
                                </p>
                            </div>

                            <div class="h-[350px] sm:h-[380px] lg:h-[420px]">
                                <canvas id="project-distribution-chart"></canvas>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <!-- TECHNICAL DASHBOARD -->
            <div id="technical-dashboard" class="mt-12 border-t border-white/5 pt-10">

                <!-- Header -->
                <div class="mx-auto mb-8 max-w-3xl text-center">

                    <p class="mb-3 text-sm font-medium uppercase tracking-[0.2em] text-sky-500">
                        Technical Dashboard
                    </p>

                    <h2 class="text-2xl font-semibold tracking-tight text-white md:text-3xl">
                        Advanced project analysis
                    </h2>

                    <p class="mx-auto mt-4 max-w-2xl text-base leading-7 text-slate-400">
                        Interactive technical reporting across the technologies
                        used in my projects.
                    </p>

                </div>

                <!-- Filters -->
                <div class="mb-5 flex flex-wrap justify-center gap-2">

                    <button type="button" data-technical-filter="All"
                        class="technical-filter rounded-full border px-3.5 py-1.5 text-xs font-medium transition-colors border-sky-500 bg-sky-500 text-white">
                        All
                    </button>

                    <button type="button" data-technical-filter="Frontend"
                        class="technical-filter rounded-full border px-3.5 py-1.5 text-xs font-medium transition-colors border-white/10 bg-[#11131d] text-slate-300 hover:border-sky-500/40 hover:text-sky-400">
                        Frontend
                    </button>

                    <button type="button" data-technical-filter="Backend"
                        class="technical-filter rounded-full border px-3.5 py-1.5 text-xs font-medium transition-colors border-white/10 bg-[#11131d] text-slate-300 hover:border-sky-500/40 hover:text-sky-400">
                        Backend
                    </button>

                    <button type="button" data-technical-filter="Database"
                        class="technical-filter rounded-full border px-3.5 py-1.5 text-xs font-medium transition-colors border-white/10 bg-[#11131d] text-slate-300 hover:border-sky-500/40 hover:text-sky-400">
                        Database
                    </button>

                    <button type="button" data-technical-filter="Language"
                        class="technical-filter rounded-full border px-3.5 py-1.5 text-xs font-medium transition-colors border-white/10 bg-[#11131d] text-slate-300 hover:border-sky-500/40 hover:text-sky-400">
                        Language
                    </button>

                    <button type="button" data-technical-filter="Infrastructure"
                        class="technical-filter rounded-full border px-3.5 py-1.5 text-xs font-medium transition-colors border-white/10 bg-[#11131d] text-slate-300 hover:border-sky-500/40 hover:text-sky-400">
                        Infrastructure
                    </button>
                    
                    <button type="button" data-technical-filter="Integrations"
                        class="technical-filter rounded-full border px-3.5 py-1.5 text-xs font-medium transition-colors border-white/10 bg-[#11131d] text-slate-300 hover:border-sky-500/40 hover:text-sky-400">
                        Integrations
                    </button>

                    <span id="technical-project-count"
                        class="flex items-center px-2 text-xs text-slate-500">
                        ' . count($items) . ' projects
                    </span>

                </div>

                <!-- Line Chart + Scatter Chart -->
                <div class="grid gap-5 lg:grid-cols-2">

                    <!-- Technology Count by Project -->
                    <div class="rounded-xl border border-white/10 bg-[#11131d] p-6 transition-all duration-500 hover:border-primary/30 hover:shadow-lg hover:shadow-primary/5">

                        <div class="mb-5">
                            <h3 class="text-lg font-semibold text-white">
                                Technology Count by Project
                            </h3>

                            <p class="mt-1 text-sm text-slate-400">
                                Number of technologies used by each project.
                            </p>
                        </div>

                        <div class="h-[280px] sm:h-[300px] lg:h-[320px]">
                            <canvas id="technical-line-chart"></canvas>
                        </div>

                    </div>

                    <!-- Technology & Integration Map -->
                    <div class="rounded-xl border border-white/10 bg-[#11131d] p-6 transition-all duration-500 hover:border-primary/30 hover:shadow-lg hover:shadow-primary/5">

                        <div class="mb-5">
                            <h3 class="text-lg font-semibold text-white">
                                Technology &amp; Integration Map
                            </h3>

                            <p class="mt-1 text-sm text-slate-400">
                                Technology count compared with integration indicators.
                            </p>
                        </div>

                        <div class="h-[280px] sm:h-[300px] lg:h-[320px]">
                            <canvas id="technical-scatter-chart"></canvas>
                        </div>

                    </div>

                </div>

                <!-- Technology Composition -->
                <div class="mt-5 rounded-xl border border-white/10 bg-[#11131d] p-6 transition-all duration-500 hover:border-primary/30 hover:shadow-lg hover:shadow-primary/5">

                    <div class="mb-5">
                        <h3 class="text-lg font-semibold text-white">
                            Technology Composition by Project
                        </h3>

                        <p class="mt-1 text-sm text-slate-400">
                            Distribution across frontend, backend, database, language, infrastructure, and integration categories.
                        </p>
                    </div>

                    <div class="h-[300px] sm:h-[320px] lg:h-[340px]">
                        <canvas id="technical-stacked-chart"></canvas>
                    </div>

                </div>

            </div>

        </div>

    </section>';
}


// ======================================================
// TASK 8 - RECURSIVE FUNCTION
// ======================================================

$skillTree = [
    "Core Application Layers" => [
        "Presentation Layer" => [
            "React.js / Next.js",
            "Reusable UI Components",
            "Responsive Layout & Navigation",
            "Forms & User Input Handling"
        ],

        "Application Layer" => [
            "Node.js / Express.js",
            "RESTful API Routes & GraphQL Endpoints",
            "Third-party API Integration",
            "Authentication & Authorization",
            "Error Handling & Logging",
            "WebSocket / Real-time Communication"
        ],

        "Data Layer" => [
            "PostgreSQL / MongoDB",
            "Data Modeling & Schema Design",
            "CRUD Operations",
            "Database Queries & Relationships",
            "ORM / Data Access (Prisma, Sequelize)"
        ]
    ],

    "Delivery & Infrastructure" => [
        "Docker Containerization",
        "CI/CD Automation (GitHub Actions)",
        "Environment & Secrets Configuration",
        "Deployment (AWS EC2 / Firebase)",
        "Reverse Proxy (Traefik / Nginx)"
    ]
];



function renderSkillTree($tree, $depth = 0)
{
    // Root: tiga lapisan inti dan satu baris infrastruktur.
    if ($depth === 0) {
        echo '<div class="space-y-6">';

        foreach ($tree as $section => $items) {
            if ($section === "Core Application Layers") {
                echo '
                    <section>
                        <div class="mb-4">
                            <p class="text-xs font-semibold uppercase
                                      tracking-[0.18em] text-primary">
                                Core Application Layers
                            </p>
                            <p class="mt-1 text-sm text-muted-foreground">
                                The main responsibilities inside a web application.
                            </p>
                        </div>

                        <div class="grid grid-cols-1 gap-4
                                    md:grid-cols-3">
                ';

                renderSkillTree($items, 1);

                echo '</div></section>';

            } elseif ($section === "Delivery & Infrastructure") {
                echo '
                    <section class="rounded-xl border border-border/50
                                    bg-card/40 p-4 sm:p-5
                                    transition-all duration-300
                                    hover:border-primary/30">
                        <div class="mb-4 flex items-center gap-3">
                            <div class="flex h-10 w-10 shrink-0
                                        items-center justify-center
                                        rounded-lg bg-primary/10">
                                <i data-lucide="package"
                                   class="h-5 w-5 text-primary"></i>
                            </div>

                            <div>
                                <h3 class="text-base font-semibold
                                           text-foreground">
                                    Delivery & Infrastructure
                                </h3>
                                <p class="mt-1 text-sm text-muted-foreground">
                                    Supporting practices across the application.
                                </p>
                            </div>
                        </div>
                ';

                renderSkillTree($items, 3);

                echo '</section>';
            }
        }

        echo '</div>';
        return;
    }

    // Layer cards: Presentation, Application, dan Data.
    if ($depth === 1) {
        foreach ($tree as $layer => $items) {
            $stack = $items[0] ?? '';
            $details = array_slice($items, 1);

            $icon = 'layers';

            if ($layer === 'Presentation Layer') {
                $icon = 'monitor';
            } elseif ($layer === 'Application Layer') {
                $icon = 'server';
            } elseif ($layer === 'Data Layer') {
                $icon = 'database';
            }

            echo '
                <article class="h-full rounded-xl
                                border border-border/50
                                bg-card/50 p-4
                                transition-colors duration-300
                                hover:border-primary/30">
                    <div class="mb-4 flex items-start gap-3">
                        <div class="flex h-9 w-9 shrink-0
                                    items-center justify-center
                                    rounded-lg bg-primary/10">
                            <i data-lucide="' . $icon . '"
                               class="h-4 w-4 text-primary"></i>
                        </div>

                        <div class="min-w-0">
                            <h3 class="text-sm font-semibold
                                       leading-relaxed text-foreground">
                                ' . htmlspecialchars(
                                    (string) $layer,
                                    ENT_QUOTES,
                                    'UTF-8'
                                ) . '
                            </h3>

                            <p class="mt-1 text-xs leading-relaxed
                                      text-muted-foreground">
                                ' . htmlspecialchars(
                                    (string) $stack,
                                    ENT_QUOTES,
                                    'UTF-8'
                                ) . '
                            </p>
                        </div>
                    </div>

                    <div class="space-y-2">
            ';

            renderSkillTree($details, 2);

            echo '</div></article>';
        }

        return;
    }

    // Recursive list: kemampuan dan tanggung jawab setiap layer.
    if ($depth === 2) {
        foreach ($tree as $item) {
            echo '
                <div class="flex items-start gap-2
                            text-sm leading-relaxed
                            text-muted-foreground">
                    <span class="mt-0.5 shrink-0 text-primary">›</span>
                    <span>' . htmlspecialchars(
                        (string) $item,
                        ENT_QUOTES,
                        'UTF-8'
                    ) . '</span>
                </div>
            ';
        }

        return;
    }

    // Recursive badges: praktik pendukung infrastruktur.
    if ($depth === 3) {
        echo '<div class="flex flex-wrap gap-2">';

        foreach ($tree as $item) {
            echo '
                <span class="inline-flex items-center rounded-md
                             border border-border/60
                             bg-background/50 px-2.5 py-1
                             text-xs text-muted-foreground">
                    ' . htmlspecialchars(
                        (string) $item,
                        ENT_QUOTES,
                        'UTF-8'
                    ) . '
                </span>
            ';
        }

        echo '</div>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="description"
        content="Portfolio of Muh. Fayiz Syamsuddin"
    >

    <title>
        <?php echo $nama; ?> - Portfolio
    </title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
        @theme {
            --color-background: #090c0f;
            --color-foreground: #f4f7fb;
            --color-card: #18191b;
            --color-card-foreground: #f4f7fb;
            --color-muted: #111720;
            --color-muted-foreground: #969eaa;
            --color-border: #26303d;
            --color-primary: #18b8f2;
            --color-primary-foreground: #061018;
        }

        body {
            background-color: #090c0f;
            color: #f4f7fb;
        }
        @keyframes exploreArrow {
            0%, 100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(4px);
            }
        }

        .explore-arrow {
            animation: exploreArrow 2.5s ease-in-out infinite;
        }
        @keyframes heroFadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes heroName {
            from {
                opacity: 0;
                transform: translateY(30px) scale(0.9);
                filter: blur(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
                filter: blur(0);
            }
        }

        @keyframes heroScaleFade {
            from {
                opacity: 0;
                transform: translateY(20px) scale(0.8);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        @keyframes heroLine {
            from {
                transform: scaleX(0);
            }

            to {
                transform: scaleX(1);
            }
        }

        @keyframes heroFade {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }


        /* Main identity */
        .hero-intro {
            opacity: 0;
            animation: heroFadeUp 0.6s ease-out 0.1s forwards;
        }

        /* Name */
        .hero-name {
            opacity: 0;
            animation:
                heroName
                1.2s
                cubic-bezier(0.16, 1, 0.3, 1)
                0.3s
                forwards;
        }

        /* Role */
        .hero-role {
            opacity: 0;
            animation:
                heroScaleFade
                0.8s
                cubic-bezier(0.16, 1, 0.3, 1)
                0.8s
                forwards;
        }

        /* Lines beside role */
        .hero-role-line {
            transform: scaleX(0);
            transform-origin: center;
            animation:
                heroLine
                0.6s
                ease-out
                1s
                forwards;
        }

        /* Description */
        .hero-description {
            opacity: 0;
            animation:
                heroFadeUp
                0.6s
                ease-out
                1s
                forwards;
        }

        /* Bold description text */
        .hero-description-bold-1 {
            opacity: 0;
            animation:
                heroFade
                0.6s
                ease-out
                1.2s
                forwards;
        }

        .hero-description-bold-2 {
            opacity: 0;
            animation:
                heroFade
                0.6s
                ease-out
                1.4s
                forwards;
        }

        /* Buttons */
        .hero-buttons {
            opacity: 0;
            animation:
                heroFadeUp
                0.6s
                ease-out
                1.2s
                forwards;
        }

        /* Social */
        .hero-social {
            opacity: 0;
            transform: scale(0.8);
            animation:
                heroScaleFade
                0.6s
                ease-out
                1.4s
                forwards;
        }

        /* Explore Work */
        .hero-explore {
            opacity: 0;
            animation:
                heroFade
                0.6s
                ease-out
                1.8s
                forwards;
        }
        /* ==========================================
        GLOBAL SCROLL REVEAL
        ========================================== */

        html.motion-enabled [data-scroll-reveal] {
            opacity: 0;
            transform: translate3d(0, 24px, 0);
            filter: blur(3px);

            transition:
                opacity 1500ms cubic-bezier(0.22, 1, 0.36, 1),
                transform 1500ms cubic-bezier(0.22, 1, 0.36, 1),
                filter 1500ms ease;

            transition-delay: var(--reveal-delay, 0ms);
            will-change: opacity, transform, filter;
        }

        html.motion-enabled [data-scroll-reveal="left"] {
            transform: translate3d(-24px, 0, 0);
        }

        html.motion-enabled [data-scroll-reveal="right"] {
            transform: translate3d(24px, 0, 0);
        }

        html.motion-enabled [data-scroll-reveal].is-revealed {
            opacity: 1;
            transform: translate3d(0, 0, 0);
            filter: blur(0);
        }

        /* Respect reduced-motion accessibility settings */
        @media (prefers-reduced-motion: reduce) {
            html.motion-enabled [data-scroll-reveal] {
                opacity: 1;
                transform: none;
                filter: none;
                transition: none;
                will-change: auto;
            }
        }
    </style>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.5.1/dist/chart.umd.min.js"></script>

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
    >
    <link
        rel="preconnect"
        href="https://fonts.googleapis.com"
    >

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&display=swap"
        rel="stylesheet"
    >

</head>


<body class="font-['Geist',sans-serif]">


<!-- NAVBAR -->


<!-- NAVBAR -->

<header class="fixed top-0 left-0 right-0 z-50 backdrop-blur-md">
    <nav class="w-full">

        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"
        >
            <div
                class="flex items-center justify-between h-16"
            >

                <!-- Logo -->
                <div class="flex-shrink-0">

                    <a
                        href="#hero"
                        class="text-xl font-bold
                            transition-all duration-300
                            text-foreground
                            hover:text-primary
                            hover:scale-105
                            rounded-md px-1"
                    >
                        Faiz<span class="font-light">ms</span>
                    </a>

                </div>

                <!-- Desktop Navigation -->
                <div
                    class="hidden md:flex
                        flex-1 justify-end mr-8"
                >
                    <div
                        class="flex items-center space-x-8"
                    >

                        <a
                            href="#about"
                            data-section="about"
                            class="nav-link
                                flex items-center gap-2
                                text-base font-medium
                                text-foreground/80
                                py-2
                                transition-all duration-200
                                hover:text-primary
                                hover:scale-105"
                        >
                            <i
                                data-lucide="user"
                                class="h-4 w-4"
                            ></i>

                            About
                        </a>

                        <a
                            href="#skills"
                            data-section="skills"
                            class="nav-link
                                flex items-center gap-2
                                text-base font-medium
                                text-foreground/80
                                py-2
                                transition-all duration-200
                                hover:text-primary
                                hover:scale-105"
                        >
                            <i
                                data-lucide="code-2"
                                class="h-4 w-4"
                            ></i>

                            Skills
                        </a>

                        <a
                            href="#projects"
                            data-section="projects"
                            class="nav-link
                                flex items-center gap-2
                                text-base font-medium
                                text-foreground/80
                                py-2
                                transition-all duration-200
                                hover:text-primary
                                hover:scale-105"
                        >
                            <i
                                data-lucide="folder-open"
                                class="h-4 w-4"
                            ></i>

                            Projects
                        </a>

                        <a
                            href="#experience"
                            data-section="experience"
                            class="nav-link
                                flex items-center gap-2
                                text-base font-medium
                                text-foreground/80
                                py-2
                                transition-all duration-200
                                hover:text-primary
                                hover:scale-105"
                        >
                            <i
                                data-lucide="briefcase"
                                class="h-4 w-4"
                            ></i>

                            Experience
                        </a>

                        <a
                            href="#contact"
                            data-section="contact"
                            class="nav-link
                                flex items-center gap-2
                                text-base font-medium
                                text-foreground/80
                                py-2
                                transition-all duration-200
                                hover:text-primary
                                hover:scale-105"
                        >
                            <i
                                data-lucide="mail"
                                class="h-4 w-4"
                            ></i>

                            Contact
                        </a>

                    </div>
                </div>

                <!-- Mobile -->
                <div class="flex items-center gap-4 md:hidden">

                    <button
                        id="mobile-menu-button"
                        type="button"
                        class="p-2 rounded-md
                            text-foreground/80
                            hover:text-primary
                            hover:bg-primary/10
                            transition-colors"
                        aria-label="Toggle mobile menu"
                        aria-expanded="false"
                    >
                        <i
                            data-lucide="menu"
                            class="h-5 w-5"
                        ></i>
                    </button>

                </div>

            </div>
        </div>
    </nav>
</header>


<main>

<!-- HERO -->
<section
    id="hero"
    class="min-h-screen flex items-center justify-center relative overflow-hidden px-4 sm:px-6 lg:px-8 pt-20"
>
    <!-- Subtle ambient background glow -->
    <div
        aria-hidden="true"
        class="pointer-events-none absolute inset-0 z-0 overflow-hidden"
    >
        <div
            class="absolute -top-32 right-[12%]
                h-80 w-80 rounded-full
                bg-primary/10 blur-[110px]"
        ></div>

        <div
            class="absolute bottom-[-5rem] left-[8%]
                h-64 w-64 rounded-full
                bg-blue-700/10 blur-[110px]"
        ></div>
    </div>
    <!-- Background effects -->
    <!-- <div class="absolute inset-0 bg-primary/[0.02]"></div>
    <div class="absolute inset-0 bg-primary/[0.01] opacity-[0.03]"></div>
    <div class="absolute inset-0 bg-primary/[0.005] opacity-[0.03]"></div> -->

    <!-- Floating dots -->
    <div
        id="floating-dots"
        class="absolute inset-0 z-[1] overflow-hidden pointer-events-none"
    ></div>

    <!-- Hero content -->
    <div class="text-center max-w-4xl mx-auto space-y-6 relative z-10">

        <!-- Hero Identity -->
        <div class="space-y-2 hero-intro">

            <!-- Open to Work -->
            <div class="absolute top-[-2.5rem] left-1/2 -translate-x-1/2">

                <?php if ($open_to_work): ?>

                    <div
                        class="inline-flex items-center gap-2
                            px-3 py-1
                            rounded-full
                            bg-green-500/5
                            border border-green-500/20
                            text-green-500
                            text-xs
                            font-medium"
                    >
                        <span class="relative flex h-2 w-2">

                            <span
                                class="animate-ping absolute inline-flex
                                    h-full w-full rounded-full
                                    bg-green-500 opacity-75"
                            ></span>

                            <span
                                class="relative inline-flex
                                    rounded-full h-2 w-2
                                    bg-green-500"
                            ></span>

                        </span>

                        Open to Work
                    </div>

                <?php else: ?>

                    <div
                        class="inline-flex items-center gap-2
                            px-3 py-1
                            rounded-full
                            bg-red-500/5
                            border border-red-500/20
                            text-red-500
                            text-xs
                            font-medium"
                    >
                        <span class="h-2 w-2 rounded-full bg-red-500"></span>
                        Not Available
                    </div>

                <?php endif; ?>

            </div>


            <!-- Main heading -->
            <div class="space-y-6">

                <h1
                    id="hero-heading"
                    class="text-4xl md:text-6xl lg:text-8xl
                        font-extralight
                        text-foreground
                        tracking-tight
                        leading-[0.9]
                        mb-2"
                >
                    <span
                        class="block
                            font-light
                            whitespace-nowrap
                            hero-name"
                    >
                        <?php echo $nama; ?>.
                    </span>
                </h1>

                <!-- Typing role -->
                <div class="flex items-center justify-center gap-3 mt-8 hero-role">

                    <div class="h-px w-8 bg-primary/30 hero-role-line"></div>

                    <div class="min-h-[1.5rem] flex items-center">

                        <h2
                            id="typed-role"
                            data-role="<?php echo htmlspecialchars($role, ENT_QUOTES, 'UTF-8'); ?>"
                            class="text-sm md:text-base
                                font-medium
                                text-muted-foreground
                                tracking-[0.2em]
                                uppercase"
                        ></h2>

                        <span
                            class="inline-block
                                w-0.5 h-4
                                bg-primary
                                ml-1
                                animate-pulse"
                        ></span>

                    </div>

                    <div class="h-px w-8 bg-primary/30 hero-role-line"></div>

                </div>

            </div>

        </div>

        <!-- Description -->
        <p
            class="text-lg md:text-xl
                text-muted-foreground max-w-3xl mx-auto
                leading-relaxed font-light
                hero-description"
        >
            <?php echo $bioFormatted; ?>
        </p>

        <!-- Buttons -->
        <div
            class="flex flex-col sm:flex-row
                gap-4 justify-center items-center
                hero-buttons"
        >

            <!-- View Resume -->
            <a
                href="public/CV - Muh. Fayiz Syamsuddin.pdf"
                id="view-resume"
                class="group inline-flex items-center
                    justify-center
                    h-10
                    px-6
                    rounded-md
                    bg-primary
                    text-primary-foreground
                    text-sm
                    font-medium
                    transition-all duration-300
                    hover:bg-primary/90
                    hover:-translate-y-0.5
                    hover:scale-105
                    hover:shadow-xl
                    hover:shadow-primary/40
                    focus:ring-2
                    focus:ring-primary/30
                    focus:ring-offset-2"
            >
                <i
                    data-lucide="file-text"
                    class="mr-2 h-4 w-4"
                ></i>

                View Resume
            </a>

            <!-- Get In Touch -->
            <a
                href="#contact"
                class="group inline-flex items-center
                    justify-center
                    h-10
                    px-6
                    rounded-md
                    border-2
                    border-[#30343a]
                    text-foreground
                    bg-foreground/5
                    text-sm
                    font-medium
                    transition-colors duration-300
                    hover:bg-[#1b1e21]
                    hover:border-[#5a6068]
                    hover:text-foreground
                    focus:ring-2
                    focus:ring-primary/30
                    focus:ring-offset-2"
            >
                <i
                    data-lucide="mail"
                    class="mr-2 h-4 w-4"
                ></i>

                Get In Touch
            </a>

        </div>

        <!-- Social Links -->
        <div
            class="flex justify-center items-center gap-6
                hero-social"
        >

            <div class="h-px bg-slate-400/20 flex-1 max-w-16"></div>

            <div class="flex gap-3">

                <a
                    href="<?php echo $github; ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="group
                        flex items-center justify-center
                        w-10 h-10
                        rounded-xl
                        border border-transparent
                        hover:bg-primary/10
                        hover:border-primary/20
                        hover:scale-110
                        transition-all duration-300
                        focus:ring-2
                        focus:ring-primary/20
                        focus:outline-none"
                    aria-label="GitHub"
                >
                    <!-- <i class="fa-brands fa-github h-5 w-5 text-muted-foreground group-hover:text-primary transition-colors duration-200"></i> -->
                    <i
                        class="fa-brands fa-github
                            text-[18px]
                            leading-none
                            text-muted-foreground
                            group-hover:text-primary
                            transition-colors duration-200"
                    ></i>
                </a>

                <a
                    href="<?php echo $linkedin; ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="group
                        flex items-center justify-center
                        w-10 h-10
                        rounded-xl
                        border border-transparent
                        hover:bg-primary/10
                        hover:border-primary/20
                        hover:scale-110
                        transition-all duration-300
                        focus:ring-2
                        focus:ring-primary/20
                        focus:outline-none"
                    aria-label="LinkedIn"
                >
                    <!-- <i class="fa-brands fa-linkedin-in h-5 w-5 text-muted-foreground group-hover:text-primary transition-colors duration-200"></i> -->
                    <i
                        class="fa-brands fa-linkedin-in
                            text-[18px]
                            leading-none
                            text-muted-foreground
                            group-hover:text-primary
                            transition-colors duration-200"
                    ></i>
                </a>

                <a
                    href="https://instagram.com/faizms14_"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="group
                        flex items-center justify-center
                        w-10 h-10
                        rounded-xl
                        border border-transparent
                        hover:bg-primary/10
                        hover:border-primary/20
                        hover:scale-110
                        transition-all duration-300
                        focus:ring-2
                        focus:ring-primary/20
                        focus:outline-none"
                    aria-label="Instagram"
                >
                    <!-- <i class="fa-brands fa-instagram h-5 w-5 text-muted-foreground group-hover:text-primary transition-colors duration-200"></i> -->
                    <i
                        class="fa-brands fa-instagram
                            text-[18px]
                            leading-none
                            text-muted-foreground
                            group-hover:text-primary
                            transition-colors duration-200"
                    ></i>
                </a>

                <a
                    href="mailto:<?php echo $email; ?>"
                    class="group
                        flex items-center justify-center
                        w-10 h-10
                        rounded-xl
                        border border-transparent
                        hover:bg-primary/10
                        hover:border-primary/20
                        hover:scale-110
                        transition-all duration-300
                        focus:ring-2
                        focus:ring-primary/20
                        focus:outline-none"
                    aria-label="Email"
                >
                    <i
                        data-lucide="mail"
                        class="h-5 w-5 
                            text-muted-foreground
                            group-hover:text-primary
                            transition-colors duration-200"
                    ></i>
                </a>

            </div>

            <div class="h-px bg-slate-400/20 flex-1 max-w-16"></div>

        </div>

        <!-- Explore Work -->
        <div class="pt-8 hero-explore">

            <a
                href="#projects"
                class="group inline-flex items-center
                    h-9
                    px-3
                    rounded-md
                    text-sm
                    font-light
                    text-muted-foreground
                    hover:text-foreground
                    transition-all duration-300
                    focus:ring-2
                    focus:ring-primary/20
                    focus:ring-offset-2
                    hover:bg-muted/30
                    border border-muted-foreground/20
                    hover:border-primary/30
                    hover:scale-105"
            >
                Explore Work

                <i
                    data-lucide="arrow-down"
                    class="ml-2 h-4 w-4
                        group-hover:text-primary
                        explore-arrow"
                ></i>
            </a>

        </div>

    </div>
</section>


<!-- ABOUT -->
<section
    id="about"
    class="py-20 px-4 scroll-mt-16
        bg-gradient-to-b
        from-[#090c0f]
        via-[#0b1019]
        to-[#090c0f]"
>
    <div class="max-w-6xl mx-auto">

        <!-- Heading -->
        <div class="text-center mb-16">

            <h2
                class="text-4xl md:text-5xl font-bold text-foreground mb-4"
            >
                About Me
            </h2>

            <p
                class="text-xl text-muted-foreground max-w-2xl mx-auto"
            >
                Building reliable web applications for real-world business needs
            </p>

        </div>

        <!-- Main About Content -->
        <div
            class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start"
        >

            <!-- Profile Image -->
            <div
                class="lg:col-span-4 flex flex-col items-center space-y-6"
            >

                <div class="relative">

                    <div
                        class="w-64 h-64 rounded-2xl overflow-hidden
                            bg-primary/10 p-1
                            transition-all duration-500
                            hover:bg-primary/20
                            hover:shadow-xl hover:shadow-primary/10"
                    >
                        <div
                            class="w-full h-full rounded-xl overflow-hidden"
                        >
                            <img
                                src="public/faiz.jpg"
                                alt="Muh. Fayiz Syamsuddin"
                                class="w-full h-full object-cover
                                    transition-transform duration-700
                                    hover:scale-105"
                            >
                        </div>
                    </div>

                    <!-- Code icon -->
                    <div
                        class="absolute -bottom-2 -right-2
                               bg-primary/50 backdrop-blur-sm
                               rounded-full p-3 shadow-lg"
                    >
                        <i
                            data-lucide="code-2"
                            class="h-6 w-6 text-white"
                        ></i>
                    </div>

                </div>

                <!-- Name + Role -->
                <div class="text-center space-y-2">

                    <h3
                        class="text-xl font-semibold text-foreground"
                    >
                        <?php echo $nama; ?>
                    </h3>

                    <span
                        class="inline-block text-sm
                            bg-primary/10
                            text-primary
                            border border-primary/20
                            rounded-md px-3 py-1"
                    >
                        <?php echo $role; ?>
                    </span>

                </div>

            </div>

            <!-- Content -->
            <div
                class="lg:col-span-8 space-y-8"
            >

                <!-- Description -->
                <div
                    class="flex flex-col
                        border border-border/50
                        rounded-xl
                        shadow-sm
                        bg-card/50
                        backdrop-blur-sm
                        py-6"
                >
                    <div class="p-8 space-y-4">

                        <p
                            class="text-lg text-muted-foreground leading-relaxed"
                        >
                            I'm a
                            <span class="text-foreground font-medium">
                                Full-Stack Developer
                            </span>
                            who transitioned into software development
                            after completing a degree in
                            <span class="text-foreground font-medium">
                                Agricultural Technology
                            </span>.
                            My academic background in automation and
                            instrumentation shaped a structured approach
                            to problem-solving and technical systems.
                        </p>

                        <p
                            class="text-lg text-muted-foreground leading-relaxed"
                        >
                            After completing the
                            <span class="text-foreground font-medium">
                                Full-Stack JavaScript Immersive program at
                                Hacktiv8 Indonesia,
                            </span>
                            I continued developing my skills through
                            real-world projects and technical training in
                            Docker and microservices.
                        </p>

                    </div>
                </div>

                <!-- Highlights -->
                <div
                    class="grid grid-cols-1 sm:grid-cols-2
                           lg:grid-cols-4 gap-6"
                >

                    <?php
                    $highlights = [
                        [
                            "icon" => "code-2",
                            "title" => "Full-Stack Developer",
                            "description" =>
                                "Experienced with Next.js, Node.js, Express.js, PostgreSQL, and MongoDB"
                        ],
                        [
                            "icon" => "lightbulb",
                            "title" => "Problem Solving",
                            "description" =>
                                "Transitioned from Agricultural Tech to Software Development"
                        ],
                        [
                            "icon" => "rocket",
                            "title" => "Real-World Projects",
                            "description" =>
                                "Built production-ready systems from enterprise operations platforms to payment and mobile apps"
                        ],
                        [
                            "icon" => "book-open",
                            "title" => "Continuous Learning",
                            "description" =>
                                "Bootcamp graduate, eager to adapt and grow globally"
                        ]
                    ];
                    ?>

                    <?php foreach ($highlights as $item): ?>

                        <div
                            class="flex flex-col
                                border border-border/50
                                rounded-xl
                                py-6
                                hover:border-primary/30
                                hover:shadow-lg
                                hover:shadow-primary/10
                                transition-all duration-300
                                h-full
                                group
                                bg-card/50
                                backdrop-blur-sm"
                        >

                            <div
                                class="p-4 text-center space-y-2"
                            >

                                <div
                                    class="mx-auto w-10 h-10
                                            bg-primary/10
                                            group-hover:bg-primary/20
                                            rounded-lg
                                            flex items-center justify-center
                                            text-primary
                                            transition-all duration-300"
                                >
                                    <i
                                        data-lucide="<?php echo $item['icon']; ?>"
                                        class="h-4 w-4"
                                    ></i>
                                </div>

                                <h4
                                    class="font-semibold
                                           text-foreground
                                           group-hover:text-primary
                                           text-xs
                                           transition-colors duration-300"
                                >
                                    <?php echo $item['title']; ?>
                                </h4>

                                <p
                                    class="text-xs
                                           text-muted-foreground
                                           leading-relaxed"
                                >
                                    <?php echo $item['description']; ?>
                                </p>

                            </div>

                        </div>

                    <?php endforeach; ?>

                </div>

            </div>

        </div>

    </div>
</section>


<!-- SKILLS -->
<section
    id="skills"
    class="min-h-[calc(100vh-4rem)] flex items-center
            py-12 px-4 scroll-mt-16
            bg-gradient-to-b
            from-[#090c0f]
            via-[#0b101b]
            to-[#0c0f1f]"
>
    <div class="max-w-7xl mx-auto w-full">

        <!-- Heading -->
        <div class="text-center mb-12">

            <h2
                class="text-4xl md:text-5xl font-bold
                    text-foreground mb-4 text-balance"
            >
                Skills & Technologies
            </h2>

            <p
                class="text-lg text-muted-foreground
                    text-pretty max-w-2xl mx-auto"
            >
                Technologies and tools I use to build, deploy, and maintain
                modern web applications
            </p>

        </div>

        <?php

        $skillCategories = [

            [
                "category" => "Frontend",
                "icon" => "globe",
                "skills" => [
                    "React.js",
                    "Next.js",
                    "React Native",
                    "Tailwind CSS",
                    "HTML5",
                    "CSS3",
                    "Apollo Client"
                ]
            ],

            [
                "category" => "Backend",
                "icon" => "layers",
                "skills" => [
                    "Node.js",
                    "Express.js",
                    "Sequelize ORM",
                    "Prisma ORM",
                    "RESTful APIs",
                    "GraphQL",
                    "Apollo Server",
                    "RabbitMQ"
                ]
            ],

            [
                "category" => "Database & Cloud",
                "icon" => "database",
                "skills" => [
                    "PostgreSQL",
                    "MongoDB",
                    "Redis",
                    "Supabase",
                    "Cloudinary",
                    "AWS EC2",
                    "Vercel"
                ]
            ],

            [
                "category" => "Programming Languages",
                "icon" => "code-2",
                "skills" => [
                    "JavaScript",
                    "TypeScript"
                ]
            ],

            [
                "category" => "Development Tools & Deployment",
                "icon" => "settings",
                "skills" => [
                    "Git & GitHub",
                    "Docker",
                    "GitHub Actions (CI/CD)",
                    "Traefik",
                    "Nginx",
                    "Postman"
                ]
            ]

        ];

        ?>

        <!-- Skill Cards -->
        <div
            class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-5 mb-12"
        >

            <?php foreach ($skillCategories as $category): ?>

                <div
                    class="bg-card/50 backdrop-blur-sm
                        border border-border/30
                        rounded-xl
                        py-6
                        hover:border-primary/50
                        hover:shadow-xl
                        hover:shadow-primary/10
                        transition-all duration-500
                        group
                        h-full"
                >

                    <div class="p-5">

                        <!-- Category Header -->
                        <div class="flex items-center gap-3 mb-5">

                            <div
                                class="p-2.5 rounded-lg
                                    bg-primary/10
                                    group-hover:bg-primary/20
                                    transition-all duration-500"
                            >
                                <i
                                    data-lucide="<?php echo $category['icon']; ?>"
                                    class="w-4 h-4 text-primary
                                            group-hover:text-primary/80
                                            group-hover:scale-110
                                            transition-colors duration-300"
                                ></i>
                            </div>

                            <h3
                                class="text-base font-semibold
                                       text-foreground
                                       group-hover:text-primary
                                       transition-colors duration-300"
                            >
                                <?php echo $category['category']; ?>
                            </h3>

                        </div>

                        <!-- Skills -->
                        <div class="space-y-1.5">

                            <?php foreach ($category['skills'] as $skill): ?>

                                <div
                                    class="text-sm text-muted-foreground
                                           hover:text-primary
                                           transition-colors duration-200
                                           py-0.5 leading-relaxed
                                           cursor-default"
                                >
                                    <span class="text-primary">•</span>
                                    <?php echo $skill; ?>
                                </div>

                            <?php endforeach; ?>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>
        
        <!-- Skill Tree - Bonus (Collapsible) -->
        <details
            class="group mt-4 w-full
                rounded-xl border border-border/50
                bg-card/50 backdrop-blur-sm
                transition-all duration-300
                hover:border-primary/30
                open:border-primary/30
                open:shadow-lg
                open:shadow-primary/5"
        >
            <summary
                class="group/header flex cursor-pointer list-none
                    items-center justify-between gap-4
                    rounded-xl p-4
                    transition-colors duration-300"
            >
                <div class="flex min-w-0 items-center gap-3">
                    <div
                        class="flex h-9 w-9 shrink-0
                               items-center justify-center
                               rounded-lg bg-primary/10"
                    >
                        <i
                            data-lucide="git-branch"
                            class="h-4 w-4 text-primary"
                        ></i>
                    </div>

                    <div>
                        <h3 class="text-base font-semibold text-foreground
                            transition-colors duration-300
                            group-hover/header:text-primary">
                            Application Architecture Map
                        </h3>

                        <p class="text-sm text-muted-foreground">
                            How the main layers of a web application work together
                        </p>
                    </div>
                </div>

                <i
                    data-lucide="chevron-down"
                    class="h-4 w-4 shrink-0 text-muted-foreground
                           transition-transform duration-200
                           group-open:rotate-180"
                ></i>
            </summary>

            <div class="border-t border-border/50 px-4 py-4 md:px-6">
                <?php renderSkillTree($skillTree); ?>
            </div>
        </details>
    </div>
</section>


<!-- PROJECTS -->

<?php

renderPortfolioSection("Recent Work", $projects);

?>

<!-- EXPERIENCE -->

<section
    id="experience"
    class="py-20 px-4 scroll-mt-16
            bg-gradient-to-b
            from-[#090c0f]
            via-[#0a101a]
            to-[#090c0f]"
>
    <div class="max-w-4xl mx-auto">

        <!-- Heading -->
        <div class="text-center mb-16">

            <h2
                class="text-4xl font-bold
                       text-foreground
                       mb-4"
            >
                Professional Journey
            </h2>

            <p
                class="text-lg
                       text-muted-foreground
                       max-w-2xl
                       mx-auto"
            >
                My journey in software development through internships,
                education, and hands-on projects
            </p>

        </div>

        <!-- Timeline -->
        <div class="relative">

            <!-- Timeline Line -->
            <div
                class="absolute
                       left-8 top-0 bottom-0
                       w-0.5
                       bg-gradient-to-b from-transparent via-primary/30 to-transparent
                       hidden md:block"
            ></div>

            <div class="space-y-8">

                <?php foreach ($experiences as $index => $exp): ?>

                    <?php

                    /*
                     * Icon mengikuti portfolio asli:
                     * Code untuk training/internship/software,
                     * GraduationCap untuk pendidikan,
                     * Briefcase untuk Assistant Supervisor.
                     */

                    if ($exp["title"] === "Bachelor of Agricultural Technology") {
                        $expIcon = "graduation-cap";
                    } elseif ($exp["title"] === "Assistant Supervisor") {
                        $expIcon = "briefcase";
                    } else {
                        $expIcon = "code";
                    }

                    ?>

                    <div class="relative group">

                        <!-- Timeline Dot -->
                        <div
                            class="absolute
                                    left-6 top-8
                                    w-4 h-4
                                    bg-primary
                                    rounded-full
                                    border-4 border-background
                                    z-10
                                    hidden md:block
                                    group-hover:scale-110
                                    shadow-[0_0_0_3px_rgba(14,165,233,0.08)]
                                    group-hover:shadow-[0_0_0_5px_rgba(14,165,233,0.12)]
                                    transition-transform duration-500"
                        ></div>

                        <!-- Experience Card -->
                        <article
                            class="md:ml-16
                                    rounded-xl
                                    border border-border/50
                                    bg-card/50
                                    text-card-foreground
                                    shadow-sm
                                    backdrop-blur-sm
                                    hover:shadow-xl
                                    hover:shadow-primary/10
                                    hover:border-primary/30
                                    hover:-translate-y-0.5
                                    transition-all duration-500"
                        >

                            <!-- Card Header -->
                            <div class="flex flex-col space-y-1.5 p-6">

                                <div
                                    class="flex items-start
                                           justify-between
                                           gap-4"
                                >

                                    <!-- Left -->
                                    <div
                                        class="flex items-center
                                               gap-3"
                                    >

                                        <!-- Icon -->
                                        <div
                                            class="p-2
                                                   rounded-lg
                                                   bg-blue-500/10
                                                   text-primary
                                                   group-hover:bg-blue-500/20
                                                   transition-all duration-300"
                                        >
                                            <i
                                                data-lucide="<?php echo $expIcon; ?>"
                                                class="h-5 w-5"
                                            ></i>
                                        </div>

                                        <!-- Title -->
                                        <div>

                                            <h3
                                                class="text-base
                                                    font-semibold
                                                    leading-tight
                                                    tracking-tight
                                                    text-foreground"
                                            >
                                                <?php echo htmlspecialchars($exp["title"]); ?>
                                            </h3>

                                            <p
                                                class="text-base
                                                       font-medium
                                                       text-muted-foreground"
                                            >
                                                <?php echo htmlspecialchars($exp["company"]); ?>
                                            </p>

                                        </div>

                                    </div>

                                    <!-- Type -->
                                    <span
                                        class="shrink-0
                                            inline-flex items-center
                                            px-2.5 py-0.5
                                            rounded-md
                                            bg-primary/10
                                            text-primary
                                            border border-primary/20
                                            text-xs
                                            font-semibold
                                            capitalize"
                                    >
                                        <?php echo htmlspecialchars($exp["type"]); ?>
                                    </span>

                                </div>

                                <!-- Date + Location -->
                                <div
                                    class="flex flex-wrap
                                           items-center
                                           gap-4
                                           text-sm
                                           text-muted-foreground
                                           mt-2"
                                >

                                    <div
                                        class="flex items-center gap-1"
                                    >
                                        <i
                                            data-lucide="calendar"
                                            class="h-4 w-4"
                                        ></i>

                                        <?php echo htmlspecialchars($exp["duration"]); ?>
                                    </div>

                                    <div
                                        class="flex items-center gap-1"
                                    >
                                        <i
                                            data-lucide="map-pin"
                                            class="h-4 w-4"
                                        ></i>

                                        <?php echo htmlspecialchars($exp["location"]); ?>
                                    </div>

                                </div>

                            </div>

                            <!-- Card Content -->
                            <div
                                class="px-6 pb-6 space-y-4"
                            >

                                <!-- Description -->
                                <p
                                    class="text-muted-foreground
                                           leading-relaxed"
                                >
                                    <?php echo htmlspecialchars($exp["description"]); ?>
                                </p>

                                <!-- Key Impact -->
                                <div class="space-y-2">

                                    <h4
                                        class="text-sm
                                               font-semibold
                                               text-foreground
                                               flex items-center
                                               gap-2"
                                    >
                                        <i
                                            data-lucide="trending-up"
                                            class="h-4 w-4"
                                        ></i>

                                        Key Impact
                                    </h4>

                                    <ul class="space-y-1">

                                        <?php foreach ($exp["impact"] as $impact): ?>

                                            <li
                                                class="text-sm
                                                       text-muted-foreground
                                                       flex items-start
                                                       gap-2"
                                            >
                                                <i
                                                    data-lucide="zap"
                                                    class="h-3 w-3
                                                           mt-1
                                                           text-primary
                                                           flex-shrink-0"
                                                ></i>

                                                <span>
                                                    <?php echo htmlspecialchars($impact); ?>
                                                </span>
                                            </li>

                                        <?php endforeach; ?>

                                    </ul>

                                </div>

                                <!-- Technologies -->
                                <div class="flex flex-wrap gap-2">

                                    <?php foreach ($exp["technologies"] as $tech): ?>

                                        <span
                                            class="text-[11px]
                                                px-2 py-0.5
                                                rounded-md
                                                bg-primary/5
                                                hover:bg-primary/10
                                                border border-primary/20
                                                text-foreground
                                                font-medium
                                                transition-all duration-200"
                                        >
                                            <?php echo htmlspecialchars($tech); ?>
                                        </span>

                                    <?php endforeach; ?>

                                </div>

                            </div>

                        </article>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </div>
</section>

<!-- CONTACT -->


<section
    id="contact"
    class="py-16 px-4 scroll-mt-16 bg-gradient-to-b from-[#090c0f] via-[#0b0f18] to-[#090c0f]"
>

    <div class="max-w-6xl mx-auto">

        <!-- Heading -->
        <div class="text-center mb-12">

            <h2
                class="text-4xl md:text-5xl
                       font-bold
                       text-foreground
                       mb-4"
            >
                Get In Touch
            </h2>

            <p
                class="text-lg
                       text-muted-foreground
                       max-w-2xl
                       mx-auto"
            >
                Have a project in mind or want to collaborate?
                I'd love to hear from you and discuss how we can work together.
            </p>

        </div>

        <!-- Two Columns -->
        <div
            class="grid grid-cols-1
                   lg:grid-cols-2
                   gap-8
                   items-stretch"
        >

            <!-- LEFT -->
            <div class="space-y-6 flex flex-col h-full">

                <!-- Send Message -->
                <div
                    class="border border-border/50
                            bg-[#131621]
                            backdrop-blur-sm
                            rounded-xl
                            hover:border-primary/30
                            hover:shadow-lg
                            hover:shadow-primary/5
                            transition-all duration-500
                            flex-1"
                >

                    <div class="p-6">

                        <h3
                            class="text-xl
                                   font-semibold
                                   text-foreground
                                   mb-2"
                        >
                            Send a Message
                        </h3>

                        <p
                            class="text-sm
                                   text-muted-foreground
                                   mb-6"
                        >
                            Fill out the form below and I'll get back
                            to you as soon as possible.
                        </p>

                        <form
                            id="contact-form"
                            class="space-y-6"
                        >
                            <!-- Honeypot anti-spam -->
                            <div class="hidden" aria-hidden="true">
                                <input
                                    type="text"
                                    name="honeypot"
                                    tabindex="-1"
                                    autocomplete="off"
                                >
                            </div>
                            <!-- Name -->
                            <div class="space-y-2">

                                <label
                                    for="contact-name"
                                    class="text-sm font-medium text-foreground"
                                >
                                    Name
                                </label>

                                <input
                                    id="contact-name"
                                    name="name"
                                    type="text"
                                    required
                                    placeholder="Your name"
                                    class="w-full
                                            h-9
                                            px-3 py-1
                                            text-sm
                                            rounded-lg
                                            border border-border/50
                                            bg-[#1d202b]
                                            text-foreground
                                            placeholder:text-slate-400
                                            outline-none
                                            focus:border-primary/60
                                            focus:ring-2
                                            focus:ring-primary/20
                                            transition-all duration-200"
                                >

                            </div>

                            <!-- Email -->
                            <div class="space-y-2">

                                <label
                                    for="contact-email"
                                    class="text-sm font-medium text-foreground"
                                >
                                    Email
                                </label>

                                <input
                                    id="contact-email"
                                    name="email"
                                    type="email"
                                    required
                                    placeholder="your.email@example.com"
                                    class="w-full
                                            px-4 py-3
                                            rounded-lg
                                            border border-border/50
                                            bg-[#1d202b]
                                            text-foreground
                                            placeholder:text-slate-400
                                            outline-none
                                            focus:border-primary/60
                                            focus:ring-2
                                            focus:ring-primary/20
                                            transition-all duration-200"
                                >

                            </div>

                            <!-- Message -->
                            <div class="space-y-2">

                                <label
                                    for="contact-message"
                                    class="text-sm font-medium text-foreground"
                                >
                                    Message
                                </label>

                                <textarea
                                    id="contact-message"
                                    name="message"
                                    required
                                    rows="4"
                                    placeholder="Tell me about your project..."
                                    class="w-full
                                            h-20 min-h-20
                                            px-3 py-2
                                            text-sm
                                            rounded-lg
                                            border border-border/50
                                            bg-[#1d202b]
                                            text-foreground
                                            placeholder:text-slate-400
                                            outline-none
                                            resize-none
                                            focus:border-primary/60
                                            focus:ring-2
                                            focus:ring-primary/20
                                            transition-all duration-200"
                                ></textarea>

                            </div>

                            <!-- Submit -->
                            <button
                                type="submit"
                                class="w-full
                                        inline-flex
                                        items-center
                                        justify-center
                                        gap-2
                                        h-9
                                        px-4 py-0
                                        text-sm
                                        rounded-lg
                                        bg-primary
                                        hover:bg-primary/90
                                        active:scale-[0.99]
                                        focus:ring-2
                                        focus:ring-primary/30
                                        focus:ring-offset-2
                                        text-[#07111d]
                                        font-medium
                                        transition-all duration-500
                                        hover:scale-[1.02]
                                        hover:shadow-lg
                                        hover:shadow-primary/25"
                            >
                                Send Message

                                <i
                                    data-lucide="send"
                                    class="h-4 w-4"
                                ></i>
                            </button>

                        </form>
                        
                    </div>

                </div>

                <!-- Available for Work -->
                <div
                    class="border border-border/50
                            bg-[#131621]
                            backdrop-blur-sm
                            rounded-xl
                            hover:border-primary/30
                            hover:shadow-lg
                            hover:shadow-primary/5
                            transition-all duration-500"
                >

                    <div class="p-6">

                        <h3
                            class="text-lg
                                   font-semibold
                                   text-foreground
                                   mb-3"
                        >
                            Available for Work
                        </h3>

                        <p
                            class="text-sm
                                   text-muted-foreground
                                   leading-relaxed"
                        >
                            I'm currently available for freelance projects
                            and full-time opportunities. Let's discuss how
                            we can work together to bring your ideas to life.
                        </p>

                    </div>

                </div>

            </div>

            <!-- RIGHT -->
            <div class="h-full">

                <div
                    class="h-full
                           flex flex-col
                           space-y-6"
                >

                    <!-- Let's Connect -->
                    <div
                        class="border border-border/50
                                bg-[#131621]
                                backdrop-blur-sm
                                rounded-xl
                                hover:border-primary/30
                                hover:shadow-lg
                                hover:shadow-primary/5
                                transition-all duration-500
                                flex flex-col flex-1"
                    >

                        <div class="p-6 flex flex-col flex-1">

                            <h3
                                class="text-xl
                                       font-semibold
                                       text-foreground
                                       mb-2"
                            >
                                Let's Connect
                            </h3>

                            <p
                                class="text-sm
                                       text-muted-foreground
                                       mb-6"
                            >
                                Feel free to reach out through any
                                of these channels.
                            </p>

                            <div class="space-y-4 flex-1 flex flex-col justify-center">

                                <!-- Email -->
                                <a
                                    href="mailto:<?php echo $email; ?>"
                                    class="flex items-center
                                            gap-4 p-3
                                            rounded-lg
                                            border border-transparent
                                            hover:bg-primary/10
                                            hover:border-primary/20
                                            transition-all duration-500
                                            group"
                                >

                                    <div
                                        class="flex h-9 w-9 shrink-0 items-center justify-center
                                            rounded-lg
                                            bg-primary/10
                                            transition-colors duration-300
                                            group-hover:bg-primary/20"
                                    >
                                        <i
                                            data-lucide="mail"
                                            class="h-5 w-5 text-primary"
                                        ></i>
                                    </div>

                                    <div>

                                        <p
                                            class="font-medium
                                                   text-foreground"
                                        >
                                            Email
                                        </p>

                                        <p
                                            class="text-sm
                                                   text-muted-foreground"
                                        >
                                            <?php echo $email; ?>
                                        </p>

                                    </div>

                                </a>

                                <!-- GitHub -->
                                <a
                                    href="<?php echo $github; ?>"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="flex items-center
                                            gap-4 p-3
                                            rounded-lg
                                            border border-transparent
                                            hover:bg-primary/10
                                            hover:border-primary/20
                                            transition-all duration-500
                                            group"
                                >

                                    <div
                                        class="flex h-9 w-9 shrink-0 items-center justify-center
                                            rounded-lg
                                            bg-primary/10
                                            transition-colors duration-300
                                            group-hover:bg-primary/20"
                                    >
                                        <i
                                            class="fa-brands fa-github
                                                text-base leading-none
                                                text-primary"
                                        ></i>
                                    </div>

                                    <div>

                                        <p
                                            class="font-medium
                                                   text-foreground"
                                        >
                                            GitHub
                                        </p>

                                        <p
                                            class="text-sm
                                                   text-muted-foreground"
                                        >
                                            github.com/muhfayizsyamsuddin
                                        </p>

                                    </div>

                                </a>

                                <!-- LinkedIn -->
                                <a
                                    href="<?php echo $linkedin; ?>"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="flex items-center
                                            gap-4 p-3
                                            rounded-lg
                                            border border-transparent
                                            hover:bg-primary/10
                                            hover:border-primary/20
                                            transition-all duration-500
                                            group"
                                >

                                    <div
                                        class="flex h-9 w-9 shrink-0 items-center justify-center
                                            rounded-lg
                                            bg-primary/10
                                            transition-colors duration-300
                                            group-hover:bg-primary/20"
                                    >
                                        <i
                                            class="fa-brands fa-linkedin-in text-base leading-none text-primary"
                                        ></i>
                                    </div>

                                    <div>

                                        <p
                                            class="font-medium
                                                   text-foreground"
                                        >
                                            LinkedIn
                                        </p>

                                        <p
                                            class="text-sm
                                                   text-muted-foreground"
                                        >
                                            linkedin.com/in/muh-fayiz-syamsuddin
                                        </p>

                                    </div>

                                </a>

                                <!-- Instagram -->
                                <a
                                    href="<?php echo $instagram; ?>"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="flex items-center
                                            gap-4 p-3
                                            rounded-lg
                                            border border-transparent
                                            hover:bg-primary/10
                                            hover:border-primary/20
                                            transition-all duration-500
                                            group"
                                >

                                    <div
                                        class="flex h-9 w-9 shrink-0 items-center justify-center
                                            rounded-lg
                                            bg-primary/10
                                            transition-colors duration-300
                                            group-hover:bg-primary/20"
                                    >
                                        <i
                                            class="fa-brands fa-instagram text-base leading-none text-primary"
                                        ></i>
                                    </div>

                                    <div>

                                        <p
                                            class="font-medium
                                                   text-foreground"
                                        >
                                            Instagram
                                        </p>

                                        <p
                                            class="text-sm
                                                   text-muted-foreground"
                                        >
                                            instagram.com/faizms14_
                                        </p>

                                    </div>

                                </a>

                            </div>

                        </div>

                    </div>

                    <!-- Location -->
                    <div
                        class="border border-border/50
                               bg-[#131621]
                               backdrop-blur-sm
                               rounded-xl
                               hover:shadow-lg
                               transition-all duration-300"
                    >

                        <div class="p-6">

                            <div
                                class="flex items-center
                                       gap-3 mb-3"
                            >

                                <div
                                    class="flex h-9 w-9 shrink-0 items-center justify-center
                                        rounded-lg
                                        bg-primary/10"
                                >
                                    <i
                                        data-lucide="map-pin"
                                        class="h-4 w-4 text-primary"
                                    ></i>
                                </div>

                                <h3
                                    class="text-lg
                                           font-semibold
                                           text-foreground"
                                >
                                    Location
                                </h3>

                            </div>

                            <p
                                class="text-sm
                                       text-muted-foreground
                                       leading-relaxed"
                            >
                                Makassar, Sulawesi Selatan, Indonesia
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>


</main>

<!-- FOOTER -->

<footer
    class="bg-[#090c0f] border-t border-white/5 py-6 px-4"
>
    <div class="max-w-6xl mx-auto">

        <div
            class="flex flex-col
                   md:flex-row
                   justify-between
                   items-center
                   gap-4"
        >

            <!-- Copyright -->
            <p
                class="text-sm
                       text-foreground
                       text-center
                       md:text-left"
            >
                © <?php echo date("Y"); ?>
                <?php echo $nama; ?>.
                All rights reserved.
            </p>

            <!-- Social Icons -->
            <div class="flex items-center gap-4">

                <!-- GitHub -->
                <a
                    href="<?php echo $github; ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="Visit GitHub profile"
                    class="text-primary
                           hover:text-primary
                           transition-all duration-300
                           p-2"
                >
                    <i
                        class="fa-brands fa-github
                            text-lg
                            hover:scale-110
                            transition-transform duration-300"
                    ></i>
                </a>

                <!-- Email -->
                <a
                    href="mailto:<?php echo $email; ?>"
                    aria-label="Send email"
                    class="text-primary
                           hover:text-primary
                           transition-all duration-300
                           p-2"
                >
                    <i
                        data-lucide="mail"
                        class="h-5 w-5
                               hover:scale-110
                               transition-transform duration-300"
                    ></i>
                </a>

                <!-- LinkedIn -->
                <a
                    href="<?php echo $linkedin; ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="Visit LinkedIn profile"
                    class="text-primary
                           hover:text-primary
                           transition-all duration-300
                           p-2"
                >
                    <i
                        class="fa-brands fa-linkedin-in
                            text-lg
                            hover:scale-110
                            transition-transform duration-300"
                    ></i>
                </a>

                <!-- Instagram -->
                <a
                    href="<?php echo $instagram; ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="Visit Instagram profile"
                    class="text-primary
                           hover:text-primary
                           transition-all duration-300
                           p-2"
                >
                    <i
                        class="fa-brands fa-instagram
                            text-lg
                            hover:scale-110
                            transition-transform duration-300"
                    ></i>
                </a>

            </div>

        </div>

    </div>
</footer>

<!-- Contact Form Notification -->
<div
    id="contact-toast"
    role="status"
    aria-live="polite"
    class="fixed bottom-4 right-4 z-[100] hidden
        max-w-sm rounded-lg px-5 py-4
        text-white shadow-xl"
>
    <p id="contact-toast-title" class="font-semibold"></p>
    <p id="contact-toast-message" class="mt-1 text-sm"></p>
</div>

<!-- EmailJS Library -->
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@5/dist/email.min.js"></script>

<script>
    
    /* ==========================================
    EMAILJS - CONTACT FORM
    ========================================== */

    // Isi dengan nilai dari environment variables Vercel.
    const EMAILJS_SERVICE_ID = "smziaf";
    const EMAILJS_CONTACT_TEMPLATE_ID = "template_q7fd51a";
    const EMAILJS_REPLY_TEMPLATE_ID = "template_l5btmyp";
    const EMAILJS_PUBLIC_KEY = "WFb4jxPm2tVU-5rTq";

    const contactForm = document.getElementById("contact-form");
    const contactToast = document.getElementById("contact-toast");
    const contactToastTitle = document.getElementById("contact-toast-title");
    const contactToastMessage = document.getElementById("contact-toast-message");

    let contactToastTimeout;

    function showContactToast(title, message, type = "success") {
        if (!contactToast) return;

        contactToast.classList.remove(
            "hidden",
            "bg-red-500",
            "bg-emerald-600"
        );

        contactToast.classList.add(
            type === "error" ? "bg-red-500" : "bg-emerald-600"
        );

        contactToastTitle.textContent = title;
        contactToastMessage.textContent = message;

        clearTimeout(contactToastTimeout);

        contactToastTimeout = setTimeout(() => {
            contactToast.classList.add("hidden");
        }, 6000);
    }

    if (contactForm) {
        contactForm.addEventListener("submit", async function (event) {
            event.preventDefault();

            const submitButton = contactForm.querySelector(
                'button[type="submit"]'
            );

            const originalButtonHTML = submitButton
                ? submitButton.innerHTML
                : "";

            const honeypot = contactForm.querySelector(
                '[name="honeypot"]'
            );

            // Abaikan pengiriman yang terdeteksi sebagai bot.
            if (honeypot && honeypot.value.trim() !== "") {
                contactForm.reset();
                return;
            }

            const configuration = [
                EMAILJS_SERVICE_ID,
                EMAILJS_CONTACT_TEMPLATE_ID,
                EMAILJS_REPLY_TEMPLATE_ID,
                EMAILJS_PUBLIC_KEY
            ];

            if (
                configuration.some(
                    (value) => !value || value.startsWith("ISI_")
                )
            ) {
                showContactToast(
                    "EmailJS belum dikonfigurasi",
                    "Lengkapi empat nilai konfigurasi EmailJS.",
                    "error"
                );
                return;
            }

            if (!window.emailjs) {
                showContactToast(
                    "EmailJS tidak tersedia",
                    "Periksa koneksi internet dan library EmailJS.",
                    "error"
                );
                return;
            }

            if (submitButton) {
                submitButton.disabled = true;
                submitButton.textContent = "Sending...";
                submitButton.classList.add(
                    "opacity-70",
                    "cursor-not-allowed"
                );
            }

            let contactSent = false;

            try {
                window.emailjs.init({
                    publicKey: EMAILJS_PUBLIC_KEY
                });

                // 1. Kirim pesan kontak ke pemilik portfolio.
                await window.emailjs.sendForm(
                    EMAILJS_SERVICE_ID,
                    EMAILJS_CONTACT_TEMPLATE_ID,
                    contactForm
                );

                contactSent = true;

                // Beri jeda untuk menghindari batas satu permintaan/detik.
                await new Promise((resolve) => setTimeout(resolve, 1100));

                // 2. Kirim balasan otomatis kepada pengunjung.
                await window.emailjs.sendForm(
                    EMAILJS_SERVICE_ID,
                    EMAILJS_REPLY_TEMPLATE_ID,
                    contactForm
                );

                contactForm.reset();

                showContactToast(
                    "Message sent successfully!",
                    "Thank you for your message. I'll get back to you soon."
                );
            } catch (error) {
                console.error("EmailJS contact form error:", error);

                if (contactSent) {
                    // Pesan utama sudah terkirim; jangan sampai terkirim ganda
                    // jika hanya pengiriman balasan otomatis yang gagal.
                    contactForm.reset();

                    showContactToast(
                        "Message sent, auto-reply failed",
                        "Pesan sudah terkirim, tetapi balasan otomatis gagal dikirim.",
                        "error"
                    );
                } else {
                    const errorMessage =
                        error?.text ||
                        error?.message ||
                        "Please try again later.";

                    showContactToast(
                        "Failed to send message",
                        errorMessage,
                        "error"
                    );
                }
            } finally {
                if (submitButton) {
                    submitButton.disabled = false;
                    submitButton.innerHTML = originalButtonHTML;

                    submitButton.classList.remove(
                        "opacity-70",
                        "cursor-not-allowed"
                    );
                }
            }
        });
    }

    /* ==========================================
    SECTION MOTION
    ========================================== */

    (function initSectionReveal() {
        const revealGroups = [
            {
                selector: "#about > div > .text-center",
                direction: "up"
            },
            {
                selector: "#about > div > .grid > :first-child",
                direction: "left"
            },
            {
                selector: "#about > div > .grid > :last-child",
                direction: "right"
            },
            {
                selector: "#about > div > .grid > :last-child > .grid > *",
                direction: "up",
                stagger: 120
            },
            {
                selector: "#skills > div > .text-center",
                direction: "up"
            },
            {
                selector: "#skills > div > .grid > *",
                direction: "up",
                stagger: 130
            },
            {
                selector: "#skills > div > details",
                direction: "up"
            },
            {
                selector: "#projects > div > .text-center",
                direction: "up"
            },
            {
                selector: "#projects #projects-grid > article",
                direction: "up",
                stagger: 100
            },
            {
                selector: "#projects #project-insights > div > div:first-child",
                direction: "up"
            },
            {
                selector: "#projects #project-insights .grid > div",
                direction: "up",
                stagger: 160
            },
            {
                selector: "#projects #technical-dashboard > .mx-auto",
                direction: "up"
            },
            {
                selector: "#projects #technical-dashboard > .grid > div",
                direction: "up",
                stagger: 160
            },
            {
                selector: "#projects #technical-dashboard > .mt-5",
                direction: "up"
            },
            {
                selector: "#experience > div > .text-center",
                direction: "up"
            },
            {
                selector: "#experience article",
                direction: "left",
                stagger: 140
            },
            {
                selector: "#contact > div > .text-center",
                direction: "up"
            },
            {
                selector: "#contact > div > .grid > *",
                direction: "up",
                stagger: 140
            },
        ];

        revealGroups.forEach(function (group) {
            document.querySelectorAll(group.selector).forEach(
                function (element, index) {
                    element.dataset.scrollReveal = group.direction;

                    if (group.stagger) {
                        element.style.setProperty(
                            "--reveal-delay",
                            Math.min(index * group.stagger, 360) + "ms"
                        );
                    }
                }
            );
        });

        const elements = document.querySelectorAll(
            "[data-scroll-reveal]"
        );

        const reducedMotion = window.matchMedia(
            "(prefers-reduced-motion: reduce)"
        ).matches;

        if (
            reducedMotion ||
            !("IntersectionObserver" in window)
        ) {
            elements.forEach(function (element) {
                element.classList.add("is-revealed");
            });

            return;
        }

        document.documentElement.classList.add("motion-enabled");

        const observer = new IntersectionObserver(
            function (entries, currentObserver) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("is-revealed");
                        currentObserver.unobserve(entry.target);
                    }
                });
            },
            {
                threshold: 0.12,
                rootMargin: "0px 0px -40px 0px"
            }
        );

        elements.forEach(function (element) {
            observer.observe(element);
        });
    })();

    /* ==========================================
       SMOOTH SCROLLING
    ========================================== */

    document.querySelectorAll('a[href^="#"]').forEach(function (link) {

        link.addEventListener("click", function (event) {

            const targetId = this.getAttribute("href");

            if (!targetId || targetId === "#") {
                return;
            }

            const target = document.querySelector(targetId);

            if (target) {

                event.preventDefault();

                target.scrollIntoView({
                    behavior: "smooth"
                });

            }

        });

    });


    /* ==========================================
       TYPING EFFECT
    ========================================== */

    const roleElement = document.getElementById("typed-role");

    if (roleElement) {
        const role = roleElement.dataset.role || "Full-Stack Developer";

        let typedText = "";
        let isDeleting = false;

        function typeRole() {
            if (!isDeleting) {
                typedText = role.substring(0, typedText.length + 1);
                roleElement.textContent = typedText;

                if (typedText === role) {
                    isDeleting = true;

                    setTimeout(typeRole, 2000);
                    return;
                }
            } else {
                typedText = role.substring(0, typedText.length - 1);
                roleElement.textContent = typedText;

                if (typedText === "") {
                    isDeleting = false;
                }
            }

            setTimeout(typeRole, isDeleting ? 50 : 100);
        }

        typeRole();
    }

/* ==========================================
   FLOATING DOTS
========================================== */

const dotsContainer =
    document.getElementById("floating-dots");

if (dotsContainer) {

    for (let i = 0; i < 15; i++) {

        const dot = document.createElement("span");

        const x1 = Math.random() * 100;
        const y1 = Math.random() * 100;

        const x2 = Math.random() * 100;
        const y2 = Math.random() * 100;

        const duration =
            10000 + Math.random() * 15000;

        const delay =
            Math.random() * 500;

        dot.style.position = "absolute";

        dot.style.width = "4px";
        dot.style.height = "4px";

        dot.style.borderRadius = "9999px";

        dot.style.background =
            "rgb(24 184 242 / 35%)";

        dot.style.filter =
            "blur(0.5px)";

        dot.style.pointerEvents =
            "none";

        dotsContainer.appendChild(dot);

        dot.animate(
            [
                {
                    left: x1 + "%",
                    top: y1 + "%",
                    opacity: 0.35,
                    transform: "scale(0.8)"
                },
                {
                    left: x2 + "%",
                    top: y2 + "%",
                    opacity: 1,
                    transform: "scale(1)"
                },
                {
                    left: x1 + "%",
                    top: y1 + "%",
                    opacity: 0,
                    transform: "scale(0.5)"
                }
            ],
            {
                duration: duration,
                delay: delay,
                iterations: Infinity,
                direction: "alternate",
                easing: "ease-in-out"
            }
        );

    }

}

// ==========================================
// NAVBAR - MOBILE MENU
// ==========================================

const mobileMenuButton =
    document.getElementById("mobile-menu-button");

const mobileNav =
    document.getElementById("mobile-nav");

if (mobileMenuButton && mobileNav) {

    mobileMenuButton.addEventListener("click", function () {

        const isOpen =
            !mobileNav.classList.contains("hidden");

        mobileNav.classList.toggle("hidden");

        mobileMenuButton.setAttribute(
            "aria-expanded",
            String(!isOpen)
        );

    });

}


// ==========================================
// NAVBAR - ACTIVE SECTION
// ==========================================

const navLinks =
    document.querySelectorAll(
        ".nav-link, .mobile-nav-link"
    );

const pageSections =
    document.querySelectorAll(
        "main section[id]"
    );

function updateActiveNav() {

    let currentSection = "hero";

    const scrollPosition =
        window.scrollY + 120;

    pageSections.forEach(function (section) {

        if (section.offsetTop <= scrollPosition) {
            currentSection = section.id;
        }

    });

    navLinks.forEach(function (link) {

        const section =
            link.dataset.section;

        if (section === currentSection) {

            link.classList.add(
                "text-primary",
                "font-semibold"
            );

            link.classList.remove(
                "text-foreground/80"
            );

        } else {

            link.classList.remove(
                "text-primary",
                "font-semibold"
            );

            link.classList.add(
                "text-foreground/80"
            );

        }

    });

}

window.addEventListener(
    "scroll",
    updateActiveNav
);

updateActiveNav();


// ==========================================
// CLOSE MOBILE MENU AFTER CLICK
// ==========================================

document.querySelectorAll(
    ".mobile-nav-link"
).forEach(function (link) {

    link.addEventListener("click", function () {

        if (mobileNav) {
            mobileNav.classList.add("hidden");
        }

        if (mobileMenuButton) {
            mobileMenuButton.setAttribute(
                "aria-expanded",
                "false"
            );
        }

    });

});

// ==========================================
// PROJECTS - SHOW ALL
// ==========================================

const showAllProjectsButton =
    document.getElementById("show-all-projects");

if (showAllProjectsButton) {

    showAllProjectsButton.addEventListener("click", function () {

        const extraProjects =
            document.querySelectorAll(".project-extra");

        const isHidden =
            extraProjects.length > 0 &&
            extraProjects[0].classList.contains("hidden");

        extraProjects.forEach(function (project) {
            project.classList.toggle("hidden");
        });

        showAllProjectsButton.textContent =
            isHidden
                ? "Show Less"
                : "Show All Projects";

    });
}


const portfolioProjects = <?php
echo json_encode(
    array_map(function ($project) {
        return [
            "name" => $project["title"],
            "technologies" => $project["tech"],
            "category" => $project["category"] ?? "Other"
        ];
    }, $projects),
    JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_AMP | JSON_HEX_QUOT
);
?>;


document.addEventListener("DOMContentLoaded", function () {
    const technologyCanvas = document.getElementById("technology-usage-chart");
    const distributionCanvas = document.getElementById("project-distribution-chart");

    if (typeof Chart === "undefined" || !technologyCanvas || !distributionCanvas) {
        console.error("Chart.js atau elemen grafik tidak ditemukan.");
        return;
    }

    const technologyCounts = {};

    portfolioProjects.forEach(function (project) {
        [...new Set(project.technologies)].forEach(function (technology) {
            technologyCounts[technology] =
                (technologyCounts[technology] || 0) + 1;
        });
    });

    const visibleTechnologyEntries = Object.entries(technologyCounts)
        .sort(function (a, b) {
            return b[1] - a[1] || a[0].localeCompare(b[0]);
        })
        .slice(0, 12);

    const categoryCounts = {};

    portfolioProjects.forEach(function (project) {
        const category = project.category || "Other";

        categoryCounts[category] =
            (categoryCounts[category] || 0) + 1;
    });

    const categoryEntries = Object.entries(categoryCounts)
        .sort(function (a, b) {
            return b[1] - a[1];
        });

    // Technology Usage Across Projects
    new Chart(technologyCanvas, {
        type: "bar",
        data: {
            labels: visibleTechnologyEntries.map(function (entry) {
                return entry[0];
            }),
            datasets: [{
                label: "Projects",
                data: visibleTechnologyEntries.map(function (entry) {
                    return entry[1];
                }),


                backgroundColor: function (context) {
                    const value = context.dataset.data[context.dataIndex];

                    if (value >= 10) return "#0ea5e9";
                    if (value >= 6) return "#38bdf8";
                    return "#7dd3fc";
                },

                borderRadius: 4,
                borderSkipped: false,
                barThickness: 16
            }]
        },
        options: {
            indexAxis: "y",
            responsive: true,
            maintainAspectRatio: false,

            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    backgroundColor: "#111827",
                    titleColor: "#ffffff",
                    bodyColor: "#d1d5db",
                    borderColor: "rgba(255,255,255,0.1)",
                    borderWidth: 1,
                    callbacks: {
                        label: function (context) {
                            return context.raw + " projects";
                        }
                    }
                }
            },

            scales: {
                x: {
                    beginAtZero: true,
                    ticks: {
                        precision: 0,
                        color: "#94a3b8"
                    },
                    grid: {
                        color: "rgba(148, 163, 184, 0.12)"
                    }
                },
                y: {
                    ticks: {
                        color: "#cbd5e1"
                    },
                    grid: {
                        display: false
                    }
                }
            },

            animation: {
                duration: 900,
                easing: "easeOutQuart"
            }
        }
    });

    // Project Distribution
    new Chart(distributionCanvas, {
        type: "doughnut",
        data: {
            labels: categoryEntries.map(function (entry) {
                return entry[0];
            }),
            datasets: [{
                data: categoryEntries.map(function (entry) {
                    return entry[1];
                }),
                backgroundColor: function(context) {
                    const value = Number(
                        context.dataset.data[context.dataIndex] ?? 0
                    );

                    if (value >= 8) return "#0ea5e9";
                    if (value >= 4) return "#38bdf8";
                    return "#7dd3fc";
                },
                borderColor: "#11131d",
                borderWidth: 3,
                hoverOffset: 6
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            cutout: "68%",

            plugins: {
                legend: {
                    position: "bottom",
                    labels: {
                        color: "#cbd5e1",
                        usePointStyle: true,
                        pointStyle: "circle",
                        padding: 18
                    }
                },
                tooltip: {
                    backgroundColor: "#111827",
                    titleColor: "#ffffff",
                    bodyColor: "#d1d5db",
                    borderColor: "rgba(255,255,255,0.1)",
                    borderWidth: 1,
                    callbacks: {
                        label: function (context) {
                            return context.label + ": " +
                                context.raw + " projects";
                        }
                    }
                }
            },

            animation: {
                duration: 900,
                easing: "easeOutQuart"
            }
        }
    });
});

(function () {
    const root = document.getElementById("technical-dashboard");

    if (!root || typeof Chart === "undefined") {
        console.error("Technical Dashboard atau Chart.js tidak ditemukan.");
        return;
    }

    const projects = portfolioProjects;

    
    const groups = {
        Frontend: [
            "Next.js",
            "React.js",
            "React Native",
            "Tailwind CSS",
            "Bootstrap",
            "HTML",
            "CSS",
            "EJS",
            "Vite",
            "Expo"
        ],
        Backend: [
            "Node.js",
            "Express.js",
            "Next.js Route Handlers",
            "GraphQL",
            "Apollo Server-client",
            "Sequelize",
            "Prisma ORM",
            "PDFKit",
            "Zod"
        ],
        Database: [
            "PostgreSQL",
            "MongoDB"
        ],
        Language: [
            "TypeScript",
            "JavaScript"
        ],
        Infrastructure: [
            "Docker",
            "GitHub Actions (CI/CD)",
            "Traefik"
        ],
        Integrations: [
            "Cloudinary",
            "Midtrans",
            "OpenAI",
            "GeminiAI",
            "Fonnte",
            "Socket.io",
            "RabbitMQ"
        ]
    };

    const integrationTechnologies = [
        "Midtrans", "OpenAI", "GeminiAI", "Cloudinary", "Socket.io",
        "RabbitMQ", "Fonnte"
    ];

    const shortNames = {
        "Opsora": "Opsora",
        "Click Booth App": "Click Booth",
        "Next Balance App": "Next Balance",
        "Denver Build": "Denver Build",
        "Photography Booking System": "Photo Booking",
        "Sportify Court App": "Sportify",
        "Smart Chat App": "Smart Chat",
        "SIO App - Microservices": "SIO Microservices",
        "My Social Media App": "Social Media",
        "Furniqo": "Furniqo",
        "SIO App": "SIO",
        "Toride Store": "Toride",
        "Prelo App": "Prelo"
    };

    let activeFilter = "All";

    function getProjectTechnologies(project) {
        if (activeFilter === "All") {
            return project.technologies;
        }

        const selectedGroup = groups[activeFilter];

        return project.technologies.filter(function (technology) {
            return selectedGroup.includes(technology);
        });
    }

    function makeScatterData(projectList) {
        const coordinateCounts = new Map();

        return projectList.map(function (project) {
            const selectedTechnologies =
                getProjectTechnologies(project);

            const actualX = selectedTechnologies.length;

            const actualY = project.technologies.filter(
                function (technology) {
                    return integrationTechnologies.includes(technology);
                }
            ).length;

            const key = `${actualX}-${actualY}`;

            const duplicateIndex = coordinateCounts.get(key) ?? 0;

            coordinateCounts.set(key, duplicateIndex + 1);

            // Geser sedikit titik yang memiliki koordinat sama.
            const jitterValues = [0, -0.06, 0.06, -0.10, 0.10];
            const jitter =
                jitterValues[duplicateIndex % jitterValues.length];

            return {
                x: actualX + jitter,
                y: actualY,
                actualX: actualX,
                actualY: actualY,
                projectName: project.name
            };
        });
    }

    // function getFilteredProjects() {
    //     return projects;
    // }
    function getFilteredProjects() {
        if (activeFilter === "All") {
            return projects;
        }

        return projects.filter(function (project) {
            return getProjectTechnologies(project).length > 0;
        });
    }

    function countByGroup(project, groupName) {
        return project.technologies.filter(function (technology) {
            return groups[groupName].includes(technology);
        }).length;
    }

    function updateChart(chart, filteredProjects, chartType) {
        chart.data.labels = filteredProjects.map(function (project) {
            return shortNames[project.name] || project.name;
        });

        if (chartType === "line") {
            chart.data.datasets[0].data = filteredProjects.map(function (project) {
                return getProjectTechnologies(project).length;
            });
        }

        if (chartType === "scatter") {
            chart.data.datasets[0].data =
                makeScatterData(filteredProjects);
        }

        if (chartType === "stacked") {
            chart.data.datasets.forEach(function (dataset) {
                dataset.data = filteredProjects.map(function (project) {
                    if (
                        activeFilter !== "All" &&
                        activeFilter !== dataset.label
                    ) {
                        return 0;
                    }

                    return countByGroup(project, dataset.label);
                });
            });
        }

        chart.update();
    }

    const commonTooltip = {
        backgroundColor: "#11131d",
        titleColor: "#ffffff",
        bodyColor: "#cbd5e1",
        borderColor: "rgba(255,255,255,0.08)",
        borderWidth: 1,
        padding: 10
    };

    const initialProjects = getFilteredProjects();

    // 1. Project Technology Profile
    const lineChart = new Chart(
        document.getElementById("technical-line-chart"),
        {
            type: "line",
            data: {
                labels: initialProjects.map(function (project) {
                    return shortNames[project.name] || project.name;
                }),
                datasets: [{
                    label: "Technologies per Project",
                    data: initialProjects.map(function (project) {
                        return project.technologies.length;
                    }),
                    borderColor: "#0ea5e9",
                    backgroundColor: "rgba(14, 165, 233, 0.08)",
                    pointBackgroundColor: "#0ea5e9",
                    pointBorderColor: "#0ea5e9",
                    pointRadius: 4,
                    pointHoverRadius: 6,
                    borderWidth: 2,
                    tension: 0.3
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        ...commonTooltip,
                        callbacks: {
                            label: function (context) {
                                return context.raw + " technologies";
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        ticks: { color: "#94a3b8", font: { size: 10 } },
                        grid: { display: false },
                        border: { display: false }
                    },
                    y: {
                        beginAtZero: true,
                        ticks: {
                            color: "#94a3b8",
                            precision: 0,
                            font: { size: 10 }
                        },
                        grid: { color: "rgba(148, 163, 184, 0.10)" },
                        border: { display: false }
                    }
                },
                animation: { duration: 1100, easing: "easeOutQuart" }
            }
        }
    );

    // 2. Technology & Integration Map
    const scatterChart = new Chart(
        document.getElementById("technical-scatter-chart"),
        {
            type: "scatter",
            data: {
                datasets: [{
                    label: "Projects",
                    data: makeScatterData(initialProjects),
                    backgroundColor: "#0ea5e9",
                    pointRadius: 6,
                    pointHoverRadius: 8
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        ...commonTooltip,
                        callbacks: {
                            title: function (items) {
                                return items[0].raw.projectName;
                            },
                            label: function (context) {
                                return [
                                    "Technologies: " + context.raw.actualX,
                                    "Integration indicators: " + context.raw.actualY
                                ];
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: "Technologies",
                            color: "#94a3b8",
                            font: { size: 11 }
                        },
                        ticks: { color: "#94a3b8", precision: 0, font: { size: 10 } },
                        grid: { color: "rgba(148, 163, 184, 0.10)" },
                        border: { display: false }
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: "Integrations",
                            color: "#94a3b8",
                            font: { size: 11 }
                        },
                        ticks: { color: "#94a3b8", precision: 0, font: { size: 10 } },
                        grid: { color: "rgba(148, 163, 184, 0.10)" },
                        border: { display: false }
                    }
                },
                animation: { duration: 1100, easing: "easeOutQuart" }
            }
        }
    );

    // 3. Technology Composition by Project
    const stackedChart = new Chart(
        document.getElementById("technical-stacked-chart"),
        {
            type: "bar",
            data: {
                labels: initialProjects.map(function (project) {
                    return shortNames[project.name] || project.name;
                }),
                datasets: [
                    {
                        label: "Frontend",
                        data: initialProjects.map(function (project) {
                            return countByGroup(project, "Frontend");
                        }),
                        backgroundColor: "#0284c7"
                    },
                    {
                        label: "Backend",
                        data: initialProjects.map(function (project) {
                            return countByGroup(project, "Backend");
                        }),
                        backgroundColor: "#0ea5e9"
                    },
                    {
                        label: "Database",
                        data: initialProjects.map(function (project) {
                            return countByGroup(project, "Database");
                        }),
                        backgroundColor: "#38bdf8"
                    },
                    {
                        label: "Language",
                        data: initialProjects.map(function (project) {
                            return countByGroup(project, "Language");
                        }),
                        backgroundColor: "#7dd3fc"
                    },
                    {
                        label: "Infrastructure",
                        data: initialProjects.map(function (project) {
                            return countByGroup(project, "Infrastructure");
                        }),
                        backgroundColor: "#bae6fd"
                    },
                    {
                        label: "Integrations",
                        data: initialProjects.map(function (project) {
                            return countByGroup(project, "Integrations");
                        }),
                        backgroundColor: "#a5f3fc"
                    }
                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: "bottom",
                        labels: {
                            color: "#cbd5e1",
                            usePointStyle: true,
                            padding: 12,
                            font: { size: 11 }
                        }
                    },
                    tooltip: commonTooltip
                },
                scales: {
                    x: {
                        stacked: true,
                        ticks: { color: "#94a3b8", font: { size: 10 } },
                        grid: { display: false },
                        border: { display: false }
                    },
                    y: {
                        stacked: true,
                        beginAtZero: true,
                        ticks: { color: "#94a3b8", precision: 0, font: { size: 10 } },
                        grid: { color: "rgba(148, 163, 184, 0.10)" },
                        border: { display: false }
                    }
                },
                animation: { duration: 1100, easing: "easeOutQuart" }
            }
        }
    );

    // Filter buttons update all three charts
    const filterButtons = root.querySelectorAll("[data-technical-filter]");
    const projectCount = document.getElementById("technical-project-count");

    filterButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            activeFilter = button.dataset.technicalFilter;

            filterButtons.forEach(function (item) {
                const isActive = item.dataset.technicalFilter === activeFilter;

                item.className = isActive
                    ? "technical-filter rounded-full border px-3.5 py-1.5 text-xs font-medium transition-colors border-sky-500 bg-sky-500 text-white"
                    : "technical-filter rounded-full border px-3.5 py-1.5 text-xs font-medium transition-colors border-white/10 bg-[#11131d] text-slate-300 hover:border-sky-500/40 hover:text-sky-400";
            });

            const filtered = getFilteredProjects();

            projectCount.textContent = filtered.length + " projects";

            updateChart(lineChart, filtered, "line");
            updateChart(scatterChart, filtered, "scatter");
            updateChart(stackedChart, filtered, "stacked");
        });
    });
})();

if (window.lucide) {
    lucide.createIcons();
}

</script>


</body>
</html>