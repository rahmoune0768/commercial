import React from "react";
import { Dropdown } from "react-bootstrap";
function Profile({ user }) {
    return (
        <Dropdown>
            <Dropdown.Toggle
                as="a"
                href="#"
                className="text-decoration-none text-dark d-flex align-items-center"
            >
                {user.name}
            </Dropdown.Toggle>

            <Dropdown.Menu align={"end"}>
                <Dropdown.Item href="#/action-1">Action</Dropdown.Item>
                <Dropdown.Item href="#/action-2">Another action</Dropdown.Item>
                <Dropdown.Divider />
                <Dropdown.Item href="#/action-3">Déconnexion</Dropdown.Item>
            </Dropdown.Menu>
        </Dropdown>
    );
}

export default Profile;
