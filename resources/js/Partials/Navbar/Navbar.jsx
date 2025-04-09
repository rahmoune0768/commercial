import React, { useContext } from "react";

import { TbMenu2, TbMoon, TbSun, TbSearch, TbBell } from "react-icons/tb";
import Profile from "./User/Profile";
import Notifications from "./User/Notifications";
import { ThemeContext } from "../../Contexts/Theme";
export default function Navbar({ user }) {
    const { darkMode, toggleDarkMode, sidebarOpen, toggleSidebar } =
        useContext(ThemeContext);
    return (
        <nav className="navbar navbar-expand top-navbar">
            <div className="container-fluid">
                {/* Sidebar Toggle */}
                <button
                    className="btn btn-link"
                    id="sidebarToggle"
                    onClick={toggleSidebar}
                >
                    <TbMenu2 />
                </button>
                {/* Search Bar */}
                <div className="d-flex search-container mx-3">
                    <div className="input-group">
                        <span className="input-group-text bg-transparent border-end-0">
                            <TbSearch />
                        </span>
                        <input
                            type="search"
                            className="form-control border-start-0"
                            placeholder="Search..."
                            aria-label="Search"
                        />
                    </div>
                </div>
                <div className="d-flex ms-auto align-items-center">
                    {/* Dark Mode Toggle */}
                    <button
                        className="dark-mode-toggle me-3"
                        id="darkModeToggle"
                        onClick={toggleDarkMode}
                    >
                        <TbMoon />
                    </button>

                    {/* User Notifications */}
                    <Notifications user={user} />
                    {/* User Profile */}
                    <Profile user={user} />
                </div>
            </div>
        </nav>
    );
}
