import React from "react";
import { Dropdown } from "react-bootstrap";
import { TbBell } from "react-icons/tb";
export default function Notifications() {
    return (
        <Dropdown>
            <Dropdown.Toggle
                id="dropdown-notifications"
                as="a"
                href="#"
                className="text-decoration-none text-dark d-flex align-items-center no-caret"
            >
                <TbBell size={24} />
            </Dropdown.Toggle>

            <Dropdown.Menu
                align={"end"}
                style={{ minWidth: "20rem" }}
                className="dropdown-menu-lg"
            >
                <Dropdown.Header>Notifications</Dropdown.Header>
                <Dropdown.Item href="#/action-1">Action</Dropdown.Item>
                <Dropdown.Item href="#/action-2">Another action</Dropdown.Item>
                <Dropdown.Item href="#/action-3">Something else</Dropdown.Item>
            </Dropdown.Menu>
        </Dropdown>
    );
}
