interface CareerContent{
 
        customizableCareer:CustomizableCareer,
        careersCpt:Array<Career>
  
}
export interface CustomizableCareer{
    title:string;
    subtitle:string;
}
export interface Career{

    lookingContent:string;
    lookingHeading:string;
    lookingImgUrl:string;
    offerContent:string;
    offerHeading:string;
    offerImgUrl:string;
    title:string;

}
export default CareerContent