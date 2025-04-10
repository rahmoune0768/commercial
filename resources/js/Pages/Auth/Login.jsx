import { useEffect } from "react";
import { Head, Link, useForm } from "@inertiajs/react";
import GuestLayout from "@/Layouts/GuestLayout";
export default function Login({ status, canResetPassword }) {
    const { data, setData, post, processing, errors, reset } = useForm({
        email: "",
        password: "",
        remember: false,
    });

    useEffect(() => {
        return () => {
            reset("password");
        };
    }, []);

    const submit = (e) => {
        e.preventDefault();

        post(route("login"));
    };

    return (
        <GuestLayout>
            <Head title="Authentification" />
            <div className="auth-wrapper v3">
                <div className="auth-form">
                    <div className="auth-header">
                        <a href="#">
                            <img
                                src="../assets/images/logo-dark.svg"
                                alt="img"
                            />
                        </a>
                    </div>
                    <div className="card my-5">
                        <div className="card-body">
                            <div className="d-flex justify-content-between align-items-end mb-4">
                                <h3 className="mb-0">
                                    <b>Authentification</b>
                                </h3>
                            </div>
                            <form onSubmit={submit}>
                                <div className="form-group mb-3">
                                    <label className="form-label">
                                        Email Address
                                    </label>
                                    <input
                                        id="email"
                                        type="email"
                                        name="email"
                                        value={data.email}
                                        className="mt-1 block w-full"
                                        autoComplete="username"
                                        onChange={(e) =>
                                            setData("email", e.target.value)
                                        }
                                    />
                                    {errors.email && (
                                        <div className="text-danger">
                                            {errors.email}
                                        </div>
                                    )}
                                </div>
                                <div className="form-group mb-3">
                                    <label className="form-label">
                                        Password
                                    </label>
                                    <input
                                        id="password"
                                        type="password"
                                        name="password"
                                        value={data.password}
                                        className="mt-1 block w-full"
                                        autoComplete="current-password"
                                        onChange={(e) =>
                                            setData("password", e.target.value)
                                        }
                                    />
                                    {errors.password && (
                                        <div className="text-danger">
                                            {errors.password}
                                        </div>
                                    )}
                                </div>
                                <div className="d-flex mt-1 justify-content-between">
                                    <div className="form-check">
                                        <input
                                            className="form-check-input input-primary"
                                            type="checkbox"
                                            id="customCheckc1"
                                            defaultChecked=""
                                        />
                                        <label
                                            className="form-check-label text-muted"
                                            htmlFor="customCheckc1"
                                        >
                                            Keep me sign in
                                        </label>
                                    </div>
                                    <h5 className="text-secondary f-w-400">
                                        Mot de passe Oublié?
                                    </h5>
                                </div>
                                <div className="d-grid mt-4">
                                    <button
                                        type="submit"
                                        className="btn btn-primary"
                                        disabled={processing}
                                    >
                                        Login
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div className="auth-footer row">
                        {/* <div class=""> */}
                        <div className="col my-1">
                            <p className="m-0">
                                Copyright © <a href="#">LiteFlow</a>
                            </p>
                        </div>
                        <div className="col-auto my-1">
                            <ul className="list-inline footer-link mb-0">
                                <li className="list-inline-item">
                                    <a href="#">Contact us</a>
                                </li>
                            </ul>
                        </div>
                        {/* </div> */}
                    </div>
                </div>
            </div>
        </GuestLayout>
    );
}
