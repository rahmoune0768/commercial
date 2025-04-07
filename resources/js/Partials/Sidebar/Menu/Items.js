const items = [
    {
        id: 1,
        name: "Dashboard",
        icon: "home",
        link: "/dashboard",
    },
    {
        id: 2,
        rubrique: "Clients",
        name: "Clients",
        icon: "folder",
        link: "#",
        children: [
            { name: "Clients", link: "/customers" },
            { name: "Ajouter", link: "/customers/create" },
        ],
    },
    {
        id: 3,
        rubrique: "Devis",
        name: "Devis",
        icon: "quotes",
        link: "#",
        children: [
            { name: "Categories", link: "/categories" },
            { name: "Produits", link: "/produits" },
            { name: "Services", link: "/services" },
        ],
    },
    {
        id: 4,
        rubrique: "Factures",
        name: "Facturation",
        icon: "invoices",
        link: "#",
        children: [
            { name: "Categories", link: "/categories" },
            { name: "Produits", link: "/produits" },
            { name: "Services", link: "/services" },
        ],
    },
    {
        id: 5,
        rubrique: "Taches",
        name: "Taches",
        icon: "tasks",
        link: "#",
        children: [
            { name: "Categories", link: "/categories" },
            { name: "Produits", link: "/produits" },
            { name: "Services", link: "/services" },
        ],
    },
    {
        id: 6,
        rubrique: "Users",
        name: "Utilisateurs",
        icon: "users",
        link: "#",
        children: [
            { name: "Roles", link: "/roles" },
            { name: "Utilisateurs", link: "/users" },
        ],
    },
    {
        id: 7, // ✅ Only one "Options" entry now
        rubrique: "Options",
        name: "Paramètres",
        icon: "users",
        link: "#",
        children: [
            { name: "Roles", link: "/roles" },
            { name: "Utilisateurs", link: "/users" },
            { name: "Preferences", link: "/preferences" }, // ✅ Differentiated content
        ],
    },
];

export default items;
