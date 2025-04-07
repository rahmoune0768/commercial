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
                    {/* Notifications */}
                    <div className="dropdown me-3">
                        <a
                            className="dropdown-toggle text-dark"
                            href="#"
                            role="button"
                            id="notificationsDropdown"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            <TbBell />

                            <span className="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                3
                                <span className="visually-hidden">
                                    unread notifications
                                </span>
                            </span>
                        </a>
                        <ul
                            className="dropdown-menu dropdown-menu-end"
                            aria-labelledby="notificationsDropdown"
                        >
                            <li>
                                <h6 className="dropdown-header">
                                    Notifications
                                </h6>
                            </li>
                            <li>
                                <a className="dropdown-item" href="#">
                                    New message
                                </a>
                            </li>
                            <li>
                                <a className="dropdown-item" href="#">
                                    Task assigned
                                </a>
                            </li>
                            <li>
                                <a className="dropdown-item" href="#">
                                    Deal updated
                                </a>
                            </li>
                            <li>
                                <hr className="dropdown-divider" />
                            </li>
                            <li>
                                <a className="dropdown-item" href="#">
                                    View all
                                </a>
                            </li>
                        </ul>
                    </div>
                    {/* User Profile */}
                    <div className="dropdown">
                        <a
                            className="dropdown-toggle d-flex align-items-center text-dark text-decoration-none"
                            href="#"
                            role="button"
                            id="userDropdown"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            <img
                                src="https://placehold.co/40x40"
                                alt="User"
                                className="rounded-circle me-2"
                                width={32}
                                height={32}
                            />
                            <span className="d-none d-md-inline">John Doe</span>
                        </a>
                        <ul
                            className="dropdown-menu dropdown-menu-end"
                            aria-labelledby="userDropdown"
                        >
                            <li>
                                <a className="dropdown-item" href="#">
                                    <i className="ti ti-user me-2" />
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a className="dropdown-item" href="#">
                                    <i className="ti ti-settings me-2" />
                                    Settings
                                </a>
                            </li>
                            <li>
                                <hr className="dropdown-divider" />
                            </li>
                            <li>
                                <a className="dropdown-item" href="#">
                                    <i className="ti ti-logout me-2" />
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    );
}
