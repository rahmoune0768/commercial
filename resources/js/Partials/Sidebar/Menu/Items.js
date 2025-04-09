const menuItems = [
    {
        section: "Principal",
        subs: [
            {
                id: 1,
                title: "Tableau de bord",
                icon: "home",
                path: "/dashboard",
            },
            {
                id: 4,
                title: "Entreprises",
                icon: "TbBuildingSkyscraper",
                path: "/companies",
                subs: [
                    {
                        id: 5,
                        title: "Toutes les entreprises",
                        path: "/companies",
                    },
                    {
                        id: 6,
                        title: "Ajouter une entreprise",
                        path: "/companies/new",
                    },
                    {
                        id: 7,
                        title: "Par secteur",
                        path: "/companies/industry",
                    },
                    {
                        id: 8,
                        title: "Secteurs d'activité",
                        path: "/companies/sector",
                    },
                ],
            },
            {
                id: 9,
                title: "Contacts",
                icon: "TbUsers",
                path: "/contacts",
                subs: [
                    { id: 10, title: "Tous les contacts", path: "/contacts" },
                    {
                        id: 11,
                        title: "Ajouter un contact",
                        path: "/contacts/new",
                    },
                    {
                        id: 12,
                        title: "Par entreprise",
                        path: "/contacts/by-company",
                        subs: [
                            {
                                id: 13,
                                title: "Non assignés",
                                path: "/contacts/unassigned",
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
                path: "/pipeline",
                subs: [
                    { id: 15, title: "Tous les deals", path: "/pipeline" },
                    { id: 16, title: "Étapes", path: "/pipeline/stages" },
                    { id: 17, title: "Prévisions", path: "/pipeline/forecast" },
                ],
            },
            {
                id: 18,
                title: "Devis",
                icon: "quotes",
                path: "/quotes",
                subs: [
                    { id: 19, title: "Nouveau devis", path: "/quotes/new" },
                    { id: 20, title: "En attente", path: "/quotes/pending" },
                    { id: 21, title: "Modèles", path: "/quotes/templates" },
                ],
            },
            {
                id: 22,
                title: "Factures",
                icon: "invoices",
                path: "/invoices",
                subs: [
                    {
                        id: 23,
                        title: "Créer une facture",
                        path: "/invoices/new",
                    },
                    { id: 24, title: "En retard", path: "/invoices/overdue" },
                    { id: 25, title: "Payées", path: "/invoices/paid" },
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
                path: "/tasks",
                subs: [
                    { id: 27, title: "Mes tâches", path: "/tasks" },
                    {
                        id: 28,
                        title: "Tâches de l'équipe",
                        path: "/tasks/team",
                    },
                    { id: 29, title: "Récurrentes", path: "/tasks/recurring" },
                ],
            },
            {
                id: 30,
                title: "Calendrier",
                icon: "TbCalendarEvent",
                path: "/calendar",
                subs: [
                    { id: 31, title: "Planification", path: "/calendar" },
                    { id: 32, title: "Réunions", path: "/calendar/meetings" },
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
                path: "/admin/users",
                subs: [
                    { id: 34, title: "Tous les rôles", path: "/admin/roles" },
                    {
                        id: 35,
                        title: "Créer un rôle",
                        path: "/admin/roles/create",
                    },
                    {
                        id: 36,
                        title: "Tous les utilisateurs",
                        path: "/admin/users",
                    },
                    {
                        id: 37,
                        title: "Ajouter un utilisateur",
                        path: "/admin/users/invite",
                    },
                ],
            },
            {
                id: 38,
                title: "Produits",
                icon: "TbBox",
                path: "/admin/products",
                subs: [
                    {
                        id: 39,
                        title: "Catégories",
                        path: "/admin/product-categories",
                    },
                    {
                        id: 40,
                        title: "Tous les produits",
                        path: "/admin/products",
                    },
                    {
                        id: 41,
                        title: "Ajouter un produit",
                        path: "/admin/products/new",
                    },
                ],
            },
            {
                id: 42,
                title: "Paramètres",
                icon: "TbSettings",
                path: "/settings",
                subs: [
                    {
                        id: 43,
                        title: "Gestion des utilisateurs",
                        path: "/settings/users",
                    },
                    {
                        id: 44,
                        title: "Champs personnalisés",
                        path: "/settings/fields",
                    },
                    {
                        id: 45,
                        title: "Modèles d’e-mail",
                        path: "/settings/templates",
                    },
                ],
            },
            {
                id: 46,
                title: "Rapports",
                icon: "TbChartBar",
                path: "/reports",
                subs: [
                    { id: 47, title: "Ventes", path: "/reports/sales" },
                    {
                        id: 48,
                        title: "Activité des clients",
                        path: "/reports/activity",
                    },
                ],
            },
        ],
    },
];

export default menuItems;
