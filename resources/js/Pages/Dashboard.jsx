import RecipeCard from "@/Components/RecipeCard";
import Card from "@/Components/card";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { usePage } from "@inertiajs/react";

export default function Dashboard({ auth, recipes,user_id }) {
    console.table(recipes);

    // const {recipes} = usePage().props;

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
                    {recipes.map((item) => (
                        
                        <div key={item["recipe_id"]} className="col mb-4">
                            <RecipeCard
                                id={item["recipe_id"]}
                                key={item["recipe_id"]}
                                img={item["thumbnail"]}
                                title={item["title"]}
                                description={item["description"]}
                                like={item["like"]}
                                isLiked={item["liked"] == "true" ? true : false}
                                slug={item["slug"]}
                                userId={user_id}
                            />
                        </div>
                    ))}
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
