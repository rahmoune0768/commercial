import React from "react";
import { TbPower } from "react-icons/tb";
import { Dropdown } from "react-bootstrap";
import { Link } from "@inertiajs/react";
function Profile({ user }) {
    return (
        <Dropdown>
            <Dropdown.Toggle
                as="a"
                href="#"
                className="text-decoration-none text-dark d-flex align-items-center"
            >
                <img
                    src="https://placehold.co/40x40"
                    alt="User"
                    className="rounded-circle me-2"
                    width={32}
                    height={32}
                />
                {user.name}
            </Dropdown.Toggle>

            <Dropdown.Menu align={"end"}>
                <Dropdown.Item href="#/action-1">Action</Dropdown.Item>
                <Dropdown.Item href="#/action-2">Another action</Dropdown.Item>
                <Dropdown.Divider />
                <Dropdown.Item href="#/action-3">
                    <Link method="post" href={route("logout")}>
                        <TbPower />
                        Déconnexion
                    </Link>
                </Dropdown.Item>
            </Dropdown.Menu>
        </Dropdown>
    );
}

export default Profile;
