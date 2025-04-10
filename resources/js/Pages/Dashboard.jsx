import {
    TbEye,
    TbEdit,
    TbChecklist,
    TbDownload,
    TbPlus,
    TbUsers,
    TbHeartHandshake,
    TbArrowNarrowUp,
    TbTargetArrow,
    TbCurrency,
} from "react-icons/tb";
import AppLayout from "@/Layouts/AppLayout";
import { Head } from "@inertiajs/react";
import PageHeader from "@/Components/PageHeader";
export default function Dashboard({ auth, settings }) {
    console.log(settings);
    return (
        <AppLayout
            user={auth.user}
            header={
                <h2 className="font-semibold text-xl text-gray-800 leading-tight">
                    Dashboard
                </h2>
            }
        >
            <Head title="Dashboard" />
            <PageHeader page="Dashboard" />
            <div className="d-flex justify-content-between align-items-center mb-4">
                <h4 className="mb-0">Dashboard Overview</h4>
                <div>
                    <button className="btn btn-sm btn-outline-secondary me-2">
                        <TbDownload className="me-1" />
                        Export
                    </button>
                    <button className="btn btn-sm btn-primary">
                        <TbPlus className="me-1" />
                        New Deal
                    </button>
                </div>
            </div>
            {/* Stats Cards */}
            <div className="row g-4 mb-4">
                <div className="col-md-6 col-lg-3">
                    <div className="dashboard-card p-3">
                        <div className="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 className="text-muted mb-1">
                                    Total Clients
                                </h6>
                                <h3 className="mb-0">1,254</h3>
                                <small className="text-success">
                                    <TbArrowNarrowUp className="me-1" /> 12%
                                    this month
                                </small>
                            </div>
                            <TbUsers
                                className="card-icon text-primary"
                                size={40}
                            />
                        </div>
                    </div>
                </div>
                <div className="col-md-6 col-lg-3">
                    <div className="dashboard-card p-3">
                        <div className="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 className="text-muted mb-1">
                                    Active Deals
                                </h6>
                                <h3 className="mb-0">48</h3>
                                <small className="text-success">
                                    <TbArrowNarrowUp className="me-1" /> 5 this
                                    week
                                </small>
                            </div>
                            <TbHeartHandshake
                                className="card-icon text-success"
                                size={40}
                            />
                        </div>
                    </div>
                </div>
                <div className="col-md-6 col-lg-3">
                    <div className="dashboard-card p-3">
                        <div className="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 className="text-muted mb-1">Revenue</h6>
                                <h3 className="mb-0">$32,450</h3>
                                <small className="text-warning">
                                    <TbTargetArrow className="me-1" /> 85% of
                                    target
                                </small>
                            </div>
                            <TbCurrency
                                className=" card-icon text-warning "
                                size={40}
                            />
                        </div>
                    </div>
                </div>
                <div className="col-md-6 col-lg-3">
                    <div className="dashboard-card p-3">
                        <div className="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 className="text-muted mb-1">
                                    Pending Tasks
                                </h6>
                                <h3 className="mb-0">12</h3>
                                <small className="text-danger">
                                    <i className="ti ti-alert-circle me-1" /> 3
                                    overdue
                                </small>
                            </div>
                            <TbChecklist className="card-icon text-info" />
                        </div>
                    </div>
                </div>
            </div>
            {/* Charts Row */}
            <div className="row g-4 mb-4">
                <div className="col-lg-8">
                    <div className="dashboard-card p-3">
                        <div className="d-flex justify-content-between align-items-center mb-3">
                            <h6 className="mb-0">Deal Activity</h6>
                            <div className="btn-group btn-group-sm">
                                <button className="btn btn-outline-secondary active">
                                    Week
                                </button>
                                <button className="btn btn-outline-secondary">
                                    Month
                                </button>
                                <button className="btn btn-outline-secondary">
                                    Year
                                </button>
                            </div>
                        </div>
                        <div style={{ height: 300 }}>
                            <canvas id="activityChart" />
                        </div>
                    </div>
                </div>
                <div className="col-lg-4">
                    <div className="dashboard-card p-3">
                        <div className="d-flex justify-content-between align-items-center mb-3">
                            <h6 className="mb-0">Deal Stages</h6>
                            <button className="btn btn-sm btn-outline-secondary">
                                Details
                            </button>
                        </div>
                        <div style={{ height: 300 }}>
                            <canvas id="dealsChart" />
                        </div>
                    </div>
                </div>
            </div>
            {/* Recent Clients Table */}
            <div className="dashboard-card p-3">
                <div className="d-flex justify-content-between align-items-center mb-3">
                    <h6 className="mb-0">Recent Clients</h6>
                    <a href="#" className="btn btn-sm btn-primary">
                        View All
                    </a>
                </div>
                <div className="table-responsive">
                    <table className="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Company</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Last Contact</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div className="d-flex align-items-center">
                                        <img
                                            src="https://placehold.co/40x40"
                                            alt="Avatar"
                                            className="rounded-circle me-2"
                                            width={32}
                                            height={32}
                                        />
                                        <span>Jean Dupont</span>
                                    </div>
                                </td>
                                <td>ABC Corp</td>
                                <td>jean@abccorp.com</td>
                                <td>+1 555 123 4567</td>
                                <td>Today</td>
                                <td>
                                    <span className="badge bg-success">
                                        Active
                                    </span>
                                </td>
                                <td>
                                    <button className="btn btn-sm btn-outline-primary me-1">
                                        <TbEye />
                                    </button>
                                    <button className="btn btn-sm btn-outline-secondary">
                                        <TbEdit />
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div className="d-flex align-items-center">
                                        <img
                                            src="https://placehold.co/40x40"
                                            alt="Avatar"
                                            className="rounded-circle me-2"
                                            width={32}
                                            height={32}
                                        />
                                        <span>Marie Martin</span>
                                    </div>
                                </td>
                                <td>XYZ Ltd</td>
                                <td>marie@xyzltd.com</td>
                                <td>+1 555 987 6543</td>
                                <td>Yesterday</td>
                                <td>
                                    <span className="badge bg-warning text-dark">
                                        Pending
                                    </span>
                                </td>
                                <td>
                                    <button className="btn btn-sm btn-outline-primary me-1">
                                        <TbEye />
                                    </button>
                                    <button className="btn btn-sm btn-outline-secondary">
                                        <TbEdit />
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div className="d-flex align-items-center">
                                        <img
                                            src="https://placehold.co/40x40"
                                            alt="Avatar"
                                            className="rounded-circle me-2"
                                            width={32}
                                            height={32}
                                        />
                                        <span>Pierre Lambert</span>
                                    </div>
                                </td>
                                <td>123 Industries</td>
                                <td>pierre@123ind.com</td>
                                <td>+1 555 456 7890</td>
                                <td>2 days ago</td>
                                <td>
                                    <span className="badge bg-danger">
                                        Inactive
                                    </span>
                                </td>
                                <td>
                                    <button className="btn btn-sm btn-outline-primary me-1">
                                        <TbEye />
                                    </button>
                                    <button className="btn btn-sm btn-outline-secondary">
                                        <TbEdit />
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </AppLayout>
    );
}
