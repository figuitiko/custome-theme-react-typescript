import AcItemsInterface from "./AcItemsInterface";
import BrandItemsInterface from "./BranItemsInterface";

interface HomeDataInterface{
    mainWidget?:string;
    brandWidget?: BrandItemsInterface;
    aboutCareerWidget?: AcItemsInterface;

}
export default HomeDataInterface;