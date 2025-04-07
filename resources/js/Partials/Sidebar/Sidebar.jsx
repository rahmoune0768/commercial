import React from "react";
import { Link } from "@inertiajs/react";
import MenuItem from "./Menu/MenuItem";
import NavItem from "./Menu/NavItem";
import items from "./Menu/Items";
import { TbApps } from "react-icons/tb";

export default function Sidebar() {
    return (
        <aside className="sidebar" id="sidebar">
            <div className="sidebar-header">
                <Link
                    href="#"
                    className="d-flex align-items-center text-decoration-none"
                >
                    <TbApps className="fs-4" />
                    <span className="logo-text fs-4 ms-2">CRM Lite</span>
                </Link>
            </div>
            <div className="sidebar-menu-container">
                <div className="sidebar-menu">
                    <ul className="nav flex-column">
                        {items.map((item, index) => (
                            <NavItem key={index} item={item} />
                        ))}
                    </ul>
                </div>
            </div>
        </aside>
    );
}
