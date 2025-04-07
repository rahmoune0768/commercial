import { createContext, useState, useEffect } from "react";

export const ThemeContext = createContext();

export const ThemeProvider = ({ children }) => {
    // Check localStorage for saved preferences
    const [darkMode, setDarkMode] = useState(
        localStorage.getItem("darkMode") === "true"
    );
    const [sidebarOpen, setSidebarOpen] = useState(
        localStorage.getItem("sidebarOpen") === "true"
    );

    // Effect to update attributes and save preferences
    useEffect(() => {
        const htmlElement = document.documentElement;

        // Update data-theme attribute
        htmlElement.setAttribute("data-bs-theme", darkMode ? "dark" : "light");

        // toggle sidebar
        const sidebarElement = document.getElementById("sidebar");
        if (sidebarElement) {
            sidebarElement.classList.toggle("sidebar-collapsed", !sidebarOpen);
        }

        // Save preferences to localStorage
        localStorage.setItem("darkMode", darkMode);
        localStorage.setItem("sidebarOpen", sidebarOpen);
    }, [darkMode, sidebarOpen]);

    const toggleDarkMode = () => {
        setDarkMode(!darkMode);
    };

    const toggleSidebar = () => {
        setSidebarOpen(!sidebarOpen);
    };

    return (
        <ThemeContext.Provider
            value={{ darkMode, toggleDarkMode, sidebarOpen, toggleSidebar }}
        >
            {children}
        </ThemeContext.Provider>
    );
};
