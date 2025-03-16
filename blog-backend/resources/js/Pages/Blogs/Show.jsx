import { usePage } from "@inertiajs/react";

export default function Show() {
    const { blog } = usePage().props;

    return (
        <div>
            <h1>{blog.title}</h1>
            <p>{blog.content}</p>
        </div>
    );
}
