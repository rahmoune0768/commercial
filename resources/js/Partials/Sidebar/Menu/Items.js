const menuItems = [
    {
        section: "Principal",
        subs: [
            {
                id: 1,
                title: "Tableau de bord",
                icon: "home",
                link: "/",
            },
            {
                id: 4,
                title: "Entreprises",
                icon: "TbBuildingSkyscraper",
                link: "/companies",
                subs: [
                    {
                        id: 5,
                        title: "Toutes les entreprises",
                        link: "/companies",
                    },
                    {
                        id: 6,
                        title: "Ajouter une entreprise",
                        link: "/companies/new",
                    },
                    {
                        id: 7,
                        title: "Par secteur",
                        link: "/companies/industry",
                    },
                    {
                        id: 8,
                        title: "Secteurs d'activité",
                        link: "/companies/sector",
                    },
                ],
            },
            {
                id: 9,
                title: "Contacts",
                icon: "TbUsers",
                link: "/contacts",
                subs: [
                    { id: 10, title: "Tous les contacts", link: "/contacts" },
                    {
                        id: 11,
                        title: "Ajouter un contact",
                        link: "/contacts/new",
                    },
                    {
                        id: 12,
                        title: "Par entreprise",
                        link: "/contacts/by-company",
                        subs: [
                            {
                                id: 13,
                                title: "Non assignés",
                                link: "/contacts/unassigned",
                            },
                        ],
                    },
                ],
            },
        ],
    },
    {
        section: "Ventes",
        subs: [
            {
                id: 14,
                title: "Pipeline",
                icon: "TbFunnel",
                link: "/pipeline",
                subs: [
                    { id: 15, title: "Tous les deals", link: "/pipeline" },
                    { id: 16, title: "Étapes", link: "/pipeline/stages" },
                    { id: 17, title: "Prévisions", link: "/pipeline/forecast" },
                ],
            },
            {
                id: 18,
                title: "Devis",
                icon: "quotes",
                link: "/quotes",
                subs: [
                    { id: 19, title: "Nouveau devis", link: "/quotes/new" },
                    { id: 20, title: "En attente", link: "/quotes/pending" },
                    { id: 21, title: "Modèles", link: "/quotes/templates" },
                ],
            },
            {
                id: 22,
                title: "Factures",
                icon: "invoices",
                link: "/invoices",
                subs: [
                    {
                        id: 23,
                        title: "Créer une facture",
                        link: "/invoices/new",
                    },
                    { id: 24, title: "En retard", link: "/invoices/overdue" },
                    { id: 25, title: "Payées", link: "/invoices/paid" },
                ],
            },
        ],
    },
    {
        section: "Opérations",
        subs: [
            {
                id: 26,
                title: "Tâches",
                icon: "TbChecklist",
                link: "/tasks",
                subs: [
                    { id: 27, title: "Mes tâches", link: "/tasks" },
                    {
                        id: 28,
                        title: "Tâches de l'équipe",
                        link: "/tasks/team",
                    },
                    { id: 29, title: "Récurrentes", link: "/tasks/recurring" },
                ],
            },
            {
                id: 30,
                title: "Calendrier",
                icon: "TbCalendarEvent",
                link: "/calendar",
                subs: [
                    { id: 31, title: "Planification", link: "/calendar" },
                    { id: 32, title: "Réunions", link: "/calendar/meetings" },
                ],
            },
        ],
    },
    {
        section: "Administration",
        subs: [
            {
                id: 33,
                title: "Utilisateurs",
                icon: "users",
                link: "/admin/users",
                subs: [
                    { id: 34, title: "Tous les rôles", link: "/admin/roles" },
                    {
                        id: 35,
                        title: "Créer un rôle",
                        link: "/admin/roles/create",
                    },
                    {
                        id: 36,
                        title: "Tous les utilisateurs",
                        link: "/admin/users",
                    },
                    {
                        id: 37,
                        title: "Ajouter un utilisateur",
                        link: "/admin/users/invite",
                    },
                ],
            },
            {
                id: 38,
                title: "Produits",
                icon: "TbBox",
                link: "/admin/products",
                subs: [
                    {
                        id: 39,
                        title: "Catégories",
                        link: "/admin/product-categories",
                    },
                    {
                        id: 40,
                        title: "Tous les produits",
                        link: "/admin/products",
                    },
                    {
                        id: 41,
                        title: "Ajouter un produit",
                        link: "/admin/products/new",
                    },
                ],
            },
            {
                id: 42,
                title: "Paramètres",
                icon: "TbSettings",
                link: "/settings",
            },
            {
                id: 46,
                title: "Rapports",
                icon: "TbChartBar",
                link: "/reports",
                subs: [
                    { id: 47, title: "Ventes", link: "/reports/sales" },
                    {
                        id: 48,
                        title: "Activité des clients",
                        link: "/reports/activity",
                    },
                ],
            },
        ],
    },
];

export default menuItems;
