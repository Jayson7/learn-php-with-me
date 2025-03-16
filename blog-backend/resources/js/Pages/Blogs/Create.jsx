import { useForm } from "@inertiajs/react";

export default function Create() {
    const { data, setData, post } = useForm({
        title: "",
        content: "",
    });

    function handleSubmit(e) {
        e.preventDefault();
        post("/blogs");
    }

    return (
        <form onSubmit={handleSubmit}>
            <input
                type="text"
                placeholder="Title"
                value={data.title}
                onChange={(e) => setData("title", e.target.value)}
            />
            <textarea
                placeholder="Content"
                value={data.content}
                onChange={(e) => setData("content", e.target.value)}
            />
            <button type="submit">Create Post</button>
        </form>
    );
}
