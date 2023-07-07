export default function ApplicationLogo({className,withWM = false,...props}) {
    return (
        <h1 {...props} className={"h1 "+className}>Resepku.{withWM&&<small className="text-xs">By: Bachtiar</small>}</h1>
    );
}
