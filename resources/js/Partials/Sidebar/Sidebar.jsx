import React, { useState } from "react";
import { Link } from "@inertiajs/react";
import MenuItem from "./Menu/MenuItem";
import NavItem from "./Menu/NavItem";
import items from "./Menu/Items";
import { TbApps } from "react-icons/tb";

export default function Sidebar() {
    const [openIndex, setOpenIndex] = useState(null);

    const handleToggle = (index) => {
        setOpenIndex((prev) => (prev === index ? null : index));
    };

    return (
        <aside className="sidebar" id="sidebar">
            <div className="sidebar-header">
                <Link
                    href="#"
                    className="d-flex align-items-center text-decoration-none"
                >
                    <TbApps className="fs-4" />
                    <span className="logo-text fs-4 ms-2">LiteFlow</span>
                </Link>
            </div>
            <div className="sidebar-menu-container">
                <div className="sidebar-menu">
                    <ul className="nav flex-column">
                        {items.map((item, index) => (
                            <NavItem
                                key={index}
                                item={item}
                                openIndex={openIndex}
                                handleToggle={handleToggle}
                            />
                        ))}
                    </ul>
                </div>
            </div>
        </aside>
    );
}
