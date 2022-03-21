import AboutDataInterface from "./AboutDataInterface";
import BrandDataInterface from "./BrandDataInterface";
import CareerContent from "./CareerInterfaces";
import FooterDataInterface from "./FooterDataInterface";
import HomeDataInterface from "./HomeDataInterface";
import MenuItemInterface from "./MenuItemInterface";
import TopBarInterface from "./TopBarInterface";

interface AppContextInterface{
    topbar?:TopBarInterface;
    baseUrlTheme?:string;
    headerLogo?:string;
    footerData?:FooterDataInterface;
    menu?:Array<MenuItemInterface>;
    homeContent?: HomeDataInterface;
    aboutContent?: AboutDataInterface;
    brandContent?: BrandDataInterface;
    careerContent?: CareerContent;
    nonce?:string;
}
export default AppContextInterface;