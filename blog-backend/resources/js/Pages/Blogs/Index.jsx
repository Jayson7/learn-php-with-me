import { Link, usePage } from "@inertiajs/react";

export default function Index() {
    const { blogs } = usePage().props;

    return (
        <div>
            <h1>All Blog Posts</h1>
            <Link href="/blogs/create">Create New Post</Link>
            {blogs.map((blog) => (
                <div key={blog.id}>
                    <h2>{blog.title}</h2>
                    <p>{blog.content}</p>
                    <Link href={`/blogs/${blog.id}`}>View</Link>
                    <Link href={`/blogs/${blog.id}/edit`}>Edit</Link>
                </div>
            ))}
        </div>
    );
}
