import React from "react";
import { Dropdown } from "react-bootstrap";

export default function NavbarItem({
    id,
    icon,
    title,
    header,
    showCaret = false,
    align,
    children,
}) {
    return (
        <Dropdown>
            {/* Custom Dropdown Toggle using an <a> tag */}
            <Dropdown.Toggle
                as="a"
                href="#"
                className="text-decoration-none text-dark d-flex align-items-center"
                id={id}
            >
                {title && title} {icon && icon}{" "}
                {showCaret && <span className="caret"></span>}
            </Dropdown.Toggle>

            {/* Dropdown Menu */}
            <Dropdown.Menu align={align}>
                <Dropdown.Header>{header}</Dropdown.Header>
                {children}
            </Dropdown.Menu>
        </Dropdown>
    );
}
