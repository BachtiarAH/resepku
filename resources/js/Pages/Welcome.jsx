import ApplicationLogo from "@/Components/ApplicationLogo";
import { Link, Head } from "@inertiajs/react";

export default function Welcome({ auth, laravelVersion, phpVersion }) {
    return (
        <>
            <Head title="Welcome" />
            <div className="d-flex justify-center">
                <div className=" flex flex-col justify-center h-screen">
                    <div className="flex align-items-end">
                    <ApplicationLogo withWM={true}/>
                    </div>
                    <Link href="/login">
                        <button className="btn">login</button>
                    </Link>
                </div>
            </div>
        </>
    );
}
