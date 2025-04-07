import React from "react";
import Sidebar from "@/Partials/Sidebar/Sidebar";
import Navbar from "@/Partials/Navbar/Navbar";

export default function AppLayout({ user, header, children }) {
    return (
        <>
            <Sidebar />
            {/* Main Content */}
            <section className="home-section">
                {/* Navbar */}
                <Navbar user={user} />
                {/* Main Content Area */}
                <div className="main-content">
                    <div className="container-fluid py-4">
                        {/* Content goes here */}
                        {children}
                    </div>
                </div>
            </section>
        </>
    );
}
