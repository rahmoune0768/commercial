import React, { useState, useEffect, useRef } from "react";
import { Link } from "@inertiajs/react";
import {
    TbChevronDown,
    TbUserShield,
    TbFileInvoice,
    TbInvoice,
    TbBrandGoogleHome,
    TbSubtask,
    TbArticle,
} from "react-icons/tb";
import Collapse from "react-bootstrap/Collapse";
const getIcon = (iconName) => {
    const iconMap = {
        home: <TbBrandGoogleHome />,
        users: <TbUserShield />,
        quotes: <TbFileInvoice />,
        invoices: <TbInvoice />,
        tasks: <TbSubtask />,
        // Add more mappings as needed
    };

    return iconMap[iconName] || <TbArticle />; // Default icon if not found
};
export default function MenuItem({ item }) {
    const [open, setOpen] = useState(false);
    const ref = useRef(null);

    useEffect(() => {
        const handleClickOnAnotherMenuItem = (event) => {
            if (
                ref.current &&
                ref.current !== event.target.closest(".menu-item")
            ) {
                setOpen(false);
            }
        };

        document.addEventListener("click", handleClickOnAnotherMenuItem);

        return () => {
            document.removeEventListener("click", handleClickOnAnotherMenuItem);
        };
    }, [ref]);
    return (
        <>
            {item.rubrique && (
                <li className="menu-title">
                    <span>{item.rubrique}</span>
                </li>
            )}

            <li className="menu-item" ref={ref}>
                <Link
                    to="#"
                    onClick={(e) => {
                        e.preventDefault();
                        setOpen(!open);
                    }}
                    aria-controls={item.name}
                    aria-expanded={open}
                >
                    {getIcon(item.icon)}
                    <span className="link_name">{item.name}</span>
                    {item.childrens && (
                        <span className="ml-auto">
                            fff
                            <TbChevronDown className="menu-arrow" />
                        </span>
                    )}
                </Link>
                {item.children && (
                    <Collapse in={open}>
                        <ul
                            id={item.name}
                            className="sub-menu list-unstyled ps-0"
                        >
                            {item.children.map((child, index) => (
                                <li key={index} className="menu-item">
                                    <Link href={child.link}>
                                        <span className="link_name">
                                            {child.name}
                                        </span>
                                    </Link>
                                </li>
                            ))}
                        </ul>
                    </Collapse>
                )}
            </li>
        </>
    );
}
