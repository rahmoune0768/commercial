import React from "react";
import { FiMenu } from "react-icons/fi";
import { TbBell } from "react-icons/tb";
import Profile from "./User/Profile";
import Notifications from "./User/Notifications";
import NavbarItem from "./NavbarItem";
export default function Navbar({ user }) {
    return (
        <nav className="navbar navbar-expand-lg border-bottom">
            <div className="container-fluid">
                <div className="d-flex align-items-center">
                    <button className="sidebar-toggle btn ">
                        <FiMenu size={24} />
                    </button>
                </div>
                <div className="d-flex align-items-center gap-3">
                    {/* Dark Mode Toggle */}
                    <button className="btn" id="darkModeToggle">
                        <i data-feather="sun" id="lightIcon" />
                        <i
                            data-feather="moon"
                            id="darkIcon"
                            className="d-none"
                        />
                    </button>
                    {/* Search */}
                    <div className="position-relative d-none d-md-block">
                        <input
                            type="text"
                            className="form-control"
                            placeholder="Search..."
                        />
                        <i
                            data-feather="search"
                            className="position-absolute top-50 end-0 translate-middle-y me-2"
                        />
                    </div>
                    <NavbarItem
                        title={<TbBell size={24} />}
                        header="Notifications"
                        showCaret={false}
                        align={"end"}
                    />
                    <NavbarItem
                        icon={user.name}
                        header="Profile Utilisateur"
                        showCaret={true}
                        align={"end"}
                    />
                    {/* Notifications */}
                    <div className="dropdown">
                        <button
                            className="btn position-relative"
                            data-bs-toggle="dropdown"
                        >
                            <i data-feather="bell" />
                            <span className="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                3
                            </span>
                        </button>
                        <ul className="dropdown-menu dropdown-menu-end">
                            <li>
                                <a className="dropdown-item" href="#">
                                    <i
                                        data-feather="file-text"
                                        className="me-2"
                                    />
                                    New Quote #QT-123
                                </a>
                            </li>
                            <li>
                                <a className="dropdown-item" href="#">
                                    <i
                                        data-feather="dollar-sign"
                                        className="me-2"
                                    />
                                    Payment Received #IN-456
                                </a>
                            </li>
                            <li>
                                <a className="dropdown-item" href="#">
                                    <i data-feather="check" className="me-2" />
                                    Quote Accepted #QT-789
                                </a>
                            </li>
                        </ul>
                    </div>
                    <Notifications />
                    {/* Profile */}
                    <Profile user={user} />
                    <div className="dropdown">
                        <button
                            className="btn d-flex align-items-center gap-2"
                            data-bs-toggle="dropdown"
                        >
                            <span className="d-none d-md-block">John Doe</span>
                        </button>
                        <ul className="dropdown-menu dropdown-menu-end">
                            <li>
                                <a className="dropdown-item" href="#">
                                    <i data-feather="user" className="me-2" />
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a className="dropdown-item" href="#">
                                    <i
                                        data-feather="settings"
                                        className="me-2"
                                    />
                                    Settings
                                </a>
                            </li>
                            <li>
                                <hr className="dropdown-divider" />
                            </li>
                            <li>
                                <a className="dropdown-item" href="#">
                                    <i
                                        data-feather="log-out"
                                        className="me-2"
                                    />
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
