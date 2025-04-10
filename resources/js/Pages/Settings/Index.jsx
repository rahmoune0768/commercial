import React from "react";
import AppLayout from "@/Layouts/AppLayout";
import { Head } from "@inertiajs/react";
export default function Index({ auth, settings }) {
    const [form, setForm] = React.useState({});

    const updateForm = (key, value) => {
        setForm((state) => ({ ...state, [key]: value }));
    };

    const handleSubmit = (e) => {
        e.preventDefault();
        axios.put("/settings", form).then((response) => {
            console.log(response);
            setForm({});
        });
    };

    return (
        <AppLayout
            user={auth.user}
            header={
                <h2 className="font-semibold text-xl text-gray-800 leading-tight">
                    Settings
                </h2>
            }
        >
            <Head title="Settings" />
            <div className="container">
                <div className="row">
                    <div className="col-12">
                        <div className="card">
                            <div className="card-body">
                                <form onSubmit={handleSubmit}>
                                    {Object.keys(settings).map((key) => (
                                        <div className="mb-3" key={key}>
                                            <label
                                                htmlFor={key}
                                                className="form-label"
                                            >
                                                {key}
                                            </label>
                                            <input
                                                type="text"
                                                className="form-control"
                                                id={key}
                                                value={
                                                    form[key] || settings[key]
                                                }
                                                onChange={(e) =>
                                                    updateForm(
                                                        key,
                                                        e.target.value
                                                    )
                                                }
                                            />
                                        </div>
                                    ))}
                                    <button
                                        type="submit"
                                        className="btn btn-primary"
                                    >
                                        Save
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </AppLayout>
    );
}
