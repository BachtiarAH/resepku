import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";

function Detail({ recipe ,ingredients,steps}) {
    const data = recipe[0];
    console.log(steps);
    return (
        <AuthenticatedLayout>
            <div className="d-flex justify-center flex-col">
                <div className="flex justify-center mt-11">
                    <img className="h-96" src={"/" + data.thumbnail} />
                </div>
                <h2 className="h2 mt-5">{data.title}</h2>
                <p className="mt-2">
                    {data.description}
                </p>

                <h3 className="h3 mt-2">Bahan-bahan</h3>
                <ul className="">
                    {ingredients.map((item)=>(
                        <li>{item.ingredient}</li>
                    ))}
                </ul>

                <h3 className="h3 mt-2 ">Langkah Pembuatan</h3>
                <ul className="mb-16 ">
                    {steps.map((item)=>(
                        <li>{item.order+1}. {item.step}</li>
                    ))}
                </ul>
            </div>
        </AuthenticatedLayout>
    );
}

export default Detail;
