import React, { useState } from "react";
import { Link } from "@inertiajs/react";
import { TbChevronRight, TbColorSwatch } from "react-icons/tb";

export default function NavItem({ item }) {
    const [openIndex, setOpenIndex] = useState(null);

    const handleToggle = (index) => {
        setOpenIndex((prev) => (prev === index ? null : index));
    };

    return (
        <>
            {item.section && <div className="menu-title">{item.section}</div>}
            {item.items?.map((child, index) => (
                <NavSubItem
                    key={index}
                    index={index}
                    child={child}
                    isOpen={openIndex === index}
                    onToggle={() => handleToggle(index)}
                />
            ))}
        </>
    );
}

function NavSubItem({ child, index, isOpen, onToggle }) {
    const handleClick = (event) => {
        event.preventDefault();
        onToggle();
    };

    return (
        <li className="nav-item">
            {child.subs ? (
                <>
                    <Link
                        className={`item-link has-subs ${
                            isOpen ? "active" : ""
                        }`}
                        href="#"
                        onClick={handleClick}
                    >
                        {child.icon && (
                            <span className="icon">
                                <TbColorSwatch size={18} />
                            </span>
                        )}
                        <span>{child.title}</span>
                        <span className={`arrow ${isOpen ? "rotate-90" : ""}`}>
                            <TbChevronRight />
                        </span>
                    </Link>
                    <ul className={`sub-menu ${isOpen ? "show" : ""}`}>
                        {child.subs.map((subitem, subIndex) => (
                            <li key={subIndex} className="nav-item">
                                <Link
                                    href={subitem.href || "#"}
                                    className="item-link"
                                >
                                    {subitem.title}
                                </Link>
                            </li>
                        ))}
                    </ul>
                </>
            ) : (
                <Link
                    href={child.href || child.link || "#"}
                    className="item-link"
                >
                    {child.icon && (
                        <span className="icon">
                            <i className={child.icon}></i>
                        </span>
                    )}
                    <span>{child.title}</span>
                </Link>
            )}
        </li>
    );
}
