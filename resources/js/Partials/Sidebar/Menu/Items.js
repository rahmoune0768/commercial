const menuItems = [
    {
        section: "Principal",
        items: [
            {
                title: "Tableau de bord",
                icon: "TbLayoutDashboard",
                path: "/dashboard",
                subs: [
                    { title: "Vue d’ensemble", path: "/dashboard" },
                    { title: "Fil d’activité", path: "/dashboard/activity" },
                ],
            },
            {
                title: "Entreprises",
                icon: "TbBuildingSkyscraper",
                path: "/companies",
                subs: [
                    { title: "Toutes les entreprises", path: "/companies" },
                    { title: "Ajouter une entreprise", path: "/companies/new" },
                    { title: "Par secteur", path: "/companies/industry" },
                    { title: "Secteur d'activité", path: "/companies/sector" },
                ],
            },
            {
                title: "Contacts",
                icon: "TbUsers",
                path: "/contacts",
                subs: [
                    { title: "Tous les contacts", path: "/contacts" },
                    { title: "Ajouter un contact", path: "/contacts/new" },
                    {
                        title: "Par entreprise",
                        path: "/contacts/by-company",
                        subs: [
                            {
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
        items: [
            {
                title: "Pipeline",
                icon: "TbFunnel",
                path: "/pipeline",
                subs: [
                    { title: "Tous les deals", path: "/pipeline" },
                    { title: "Étapes", path: "/pipeline/stages" },
                    { title: "Prévisions", path: "/pipeline/forecast" },
                ],
            },
            {
                title: "Devis",
                icon: "TbFileText",
                path: "/quotes",
                subs: [
                    { title: "Nouveau devis", path: "/quotes/new" },
                    { title: "En attente", path: "/quotes/pending" },
                    { title: "Modèles", path: "/quotes/templates" },
                ],
            },
            {
                title: "Factures",
                icon: "TbReceipt",
                path: "/invoices",
                subs: [
                    { title: "Créer une facture", path: "/invoices/new" },
                    { title: "En retard", path: "/invoices/overdue" },
                    { title: "Payées", path: "/invoices/paid" },
                ],
            },
        ],
    },
    {
        section: "Opérations",
        items: [
            {
                title: "Tâches",
                icon: "TbChecklist",
                path: "/tasks",
                subs: [
                    { title: "Mes tâches", path: "/tasks" },
                    { title: "Tâches de l'équipe", path: "/tasks/team" },
                    { title: "Récurrentes", path: "/tasks/recurring" },
                ],
            },
            {
                title: "Calendrier",
                icon: "TbCalendarEvent",
                path: "/calendar",
                subs: [
                    { title: "Planification", path: "/calendar" },
                    { title: "Réunions", path: "/calendar/meetings" },
                ],
            },
        ],
    },
    {
        section: "Administration",
        items: [
            {
                title: "Utilisateurs",
                icon: "TbUser",
                path: "/admin/users",
                subs: [
                    { title: "Tous les utilisateurs", path: "/admin/users" },
                    {
                        title: "Inviter un utilisateur",
                        path: "/admin/users/invite",
                    },
                ],
            },
            {
                title: "Rôles",
                icon: "TbLockAccess",
                path: "/admin/roles",
                subs: [
                    { title: "Tous les rôles", path: "/admin/roles" },
                    { title: "Créer un rôle", path: "/admin/roles/create" },
                ],
            },
            {
                title: "Paramètres",
                icon: "TbSettings",
                path: "/settings",
                subs: [
                    {
                        title: "Gestion des utilisateurs",
                        path: "/settings/users",
                    },
                    { title: "Champs personnalisés", path: "/settings/fields" },
                    { title: "Modèles d’e-mail", path: "/settings/templates" },
                ],
            },
            {
                title: "Rapports",
                icon: "TbChartBar",
                path: "/reports",
                subs: [
                    { title: "Ventes", path: "/reports/sales" },
                    {
                        title: "Activité des clients",
                        path: "/reports/activity",
                    },
                ],
            },
        ],
    },
];

export default menuItems;
