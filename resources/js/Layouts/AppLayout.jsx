import React from "react";
import Sidebar from "@/Partials/Sidebar/Sidebar";
import Navbar from "@/Partials/Navbar/Navbar";

export default function AppLayout({ user, header, children }) {
    return (
        <div className="wrapper">
            {/* Sidebar */}
            <Sidebar />
            {/* Main Content */}
            <div className="main-content">
                {/* Top Navbar */}
                <Navbar user={user} />
                {/* Page Content */}
                <div className="container-fluid p-4">{children}</div>
            </div>
        </div>
    );
}
