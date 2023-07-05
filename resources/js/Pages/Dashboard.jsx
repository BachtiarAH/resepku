import Card from "@/Components/card";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";

export default function Dashboard({ auth }) {
    const items = [
        "Apple",
        "Banana",
        "Orange",
        "Mango",
        "Strawberry",
        "Grapes",
        "Pineapple",
        "Watermelon",
        "Kiwi",
        "Peach",
    ];

    return (
        <AuthenticatedLayout
            user={auth.user}
            header={
                <h2 className="font-semibold text-xl text-gray-800 leading-tight">
                    Dashboard
                </h2>
            }
        >
            <h2 className="mb-3 mt-6 h4">Resep Terbaru</h2>

            <div className="">
                <div className="d-flex justify-content-beetwen flex-wrap">
                    {items.map((item) => (
                        <div key={item} className="col mb-4">
                            <Card></Card>
                        </div>
                    ))}
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
