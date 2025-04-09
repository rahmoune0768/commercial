import React from "react";
import { Link } from "@inertiajs/react";
export default function PageHeader({ page, parent }) {
    return (
        <div className="page-header">
            <div className="page-block">
                <div className="row align-items-center">
                    <div className="col-md-12">
                        <div className="page-header-title">
                            <h5 className="m-b-10">{page}</h5>
                        </div>
                        <ul className="breadcrumb">
                            <li className="breadcrumb-item">
                                <Link href="/">Accueil</Link>
                            </li>
                            {parent && (
                                <li className="breadcrumb-item">
                                    <Link href={parent.link}>
                                        {parent.title}
                                    </Link>
                                </li>
                            )}
                            <li className="breadcrumb-item active">{page}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    );
}
