import React from "react";
import { Link } from "@inertiajs/react";
import {
    TbDashboard,
    TbUserShield,
    TbFileInvoice,
    TbInvoice,
    TbSubtask,
    TbBuildingSkyscraper,
    TbUsers,
    TbFileText,
    TbReceipt,
    TbChecklist,
    TbCalendarEvent,
    TbUser,
    TbBox,
    TbCategory,
    TbSettings,
    TbChartBar,
    TbChevronRight, // For submenu arrows
} from "react-icons/tb";

const iconMap = {
    home: <TbDashboard size={18} />,
    users: <TbUserShield size={18} />,
    quotes: <TbFileInvoice size={18} />,
    invoices: <TbInvoice size={18} />,
    tasks: <TbSubtask size={18} />,
    TbBuildingSkyscraper: <TbBuildingSkyscraper size={18} />,
    TbUsers: <TbUsers size={18} />,
    TbFileText: <TbFileText size={18} />,
    TbReceipt: <TbReceipt size={18} />,
    TbChecklist: <TbChecklist size={18} />,
    TbCalendarEvent: <TbCalendarEvent size={18} />,
    TbUser: <TbUser size={18} />,
    TbBox: <TbBox size={18} />,
    TbCategory: <TbCategory size={18} />,
    TbSettings: <TbSettings size={18} />,
    TbChartBar: <TbChartBar size={18} />,
};

const getIcon = (iconName) => {
    return iconMap[iconName] || <TbDashboard size={18} />;
};

export default function NavItem({ item, openIndex, handleToggle }) {
    return (
        <>
            {item.section && <div className="menu-title">{item.section}</div>}

            {item.subs?.map((child) => (
                <li key={child.id} className="nav-item">
                    {child.subs ? (
                        <>
                            <Link
                                className={`item-link has-subs ${
                                    openIndex === child.id ? "active" : ""
                                }`}
                                href="#"
                                onClick={(e) => {
                                    e.preventDefault();
                                    handleToggle(child.id);
                                }}
                            >
                                {child.icon && (
                                    <span className="icon">
                                        {getIcon(child.icon)}
                                    </span>
                                )}
                                <span>{child.title}</span>
                                <span
                                    className={`arrow ${
                                        openIndex === child ? "rotate-90" : ""
                                    }`}
                                >
                                    <TbChevronRight />
                                </span>
                            </Link>
                            <ul
                                className={`sub-menu ${
                                    openIndex === child.id ? "show" : ""
                                }`}
                            >
                                {child.subs.map((subitem) => (
                                    <li key={subitem.id} className="nav-item">
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
                                    {getIcon(child.icon)}
                                </span>
                            )}
                            <span>{child.title}</span>
                        </Link>
                    )}
                </li>
            ))}
        </>
    );
}
