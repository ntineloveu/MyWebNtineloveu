$(document).ready(function() {

  $(".nav__menu-xs").hide();
  $("#menu-xs").click(function() {
    $(".nav__menu-xs").slideToggle("normal");
  });

  $('a[rel="_blank"]').each(function() {
    $(this).attr("target", "_blank");
  });

  $(".email_at").text("@").css("text-decoration", "none");

  // ios generatee
  $("#click-generate").click(function() {
    var text = $("#input-text").val();
    var modelname = $("#model-name").val();         
    var textSplit = text.split("\n");
    var outputM = "";
    var outputH = "";
    var length = textSplit.length;

    if (text != "" && modelname != "") {
      outputH += "#import <Foundation/Foundation.h>\n#import \"BaseModel.h\"\n\n";
      outputM += "#import \""+modelname+".h\"\n";
      outputM += "#import \"Utils.h\"\n\n";    
  
      outputH += "@interface "+modelname+" : NSObject<BaseModel>\n\n";
      outputM += "@interface "+modelname+"()\n\n";
      
      for (i = 0; i < length; i++) { 
        if (textSplit[i] != "") {
          outputH += "- (NSString *)"+textSplit[i]+"Text;\n";        
          outputM += "@property (nonatomic, strong) NSString *"+textSplit[i]+";\n";        
        }
      }
  
      outputH += "\n@end";    
      outputM += "\n@end\n\n";
  
      outputM += "@implementation "+modelname+"\n\n";
  
      outputM += "- (instancetype)initFromDictionary:(NSDictionary *)dict {\n\tself = [super init];\n\tif (self) {\n";
      
      for (i = 0; i < length; i++) { 
        if (textSplit[i] != "") {        
          outputM += "\t\tself."+textSplit[i]+" = IF_EMPTY(dict[@\""+textSplit[i]+"\"], @\"\");\n";
        }
      }
  
      outputM += "\t}\n\treturn self;\n}\n\n"
  
      for (i = 0; i < length; i++) { 
        if (textSplit[i] != "") {        
          outputM += "- (NSString *)"+textSplit[i]+"Text {\n\treturn self."+textSplit[i]+";\n}\n\n";
        }
      }
  
      outputM += "@end";
  
      $("#output-m-text").val(outputM);
      $("#output-h-text").val(outputH);
    } else {
      alert("Please enter input ModelName and VariableName");
    }

    
  });

  $("#button-copy-h").click(function(){
    $("#output-h-text").select();
    document.execCommand('copy');
  });

  $("#button-copy-m").click(function(){
    $("#output-m-text").select();
    document.execCommand('copy');
  });
  
});

