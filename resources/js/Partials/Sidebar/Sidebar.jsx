import React from "react";
import MenuItem from "./Menu/MenuItem";
import items from "./Menu/Items";
import { TbBleachNoChlorine } from "react-icons/tb";

export default function Sidebar() {
    return (
        <div className="sidebar" id="sidebar">
            <div className="logo-details d-flex align-items-center justify-content-center">
                <TbBleachNoChlorine size={30} className="m-2 text-primary" />

                <span className="logo_name fw-bold"> Prospecto CRM</span>
            </div>
            <ul className="nav-links">
                {items.map((item, index) => (
                    <MenuItem key={index} item={item} />
                ))}
            </ul>
        </div>
    );
}
