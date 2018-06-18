<!DOCTYPE html>
<html>
  <?php
    $title_page = "NTINELOVEU - AUTO GEN";
    require_once 'header.php';
  ?>
  <body>
    <div class="container-fluid">

      <?php require_once 'top_header.php' ?>

      <div class="row content">

        <div class="col-xs-12 text-center">
            <h1>Auto Gen Model by NTINELOVEU</h1>
            <div class="text-center">
                <button type="button" class="btn btn-success btn-lg" id="click-generate">Generate</button>
              </div> 
        </div>

        <div class="col-xs-12 font-size-16">
          <div class="row">
            <div class="col-xs-6 input">
              <form>
                <div class="form-group">
                  <label for="model-name">ModelName:</label>
                  <textarea class="form-control" rows="5" id="model-name" placeholder='LabelModel'></textarea>
                </div>
              </form>
            </div>
            <div class="col-xs-6 input">
              <form>
                <div class="form-group">
                  <label for="input">VariableName:</label>
                  <textarea class="form-control" rows="5" id="input-text" placeholder='titleLabel
detailLabel'></textarea>
                </div>
              </form>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-6 output">
              <form>
                <div class="form-group">
                  <label for="outout-h">Output(.h):</label>
                  <div class="text-right inline">
                    <button type="button" class="btn btn-primary btn-xs" id="button-copy-h">Copy</button>
                  </div> 
                  <textarea class="form-control" rows="20" id="output-h-text" placeholder='#import <Foundation/Foundation.h>
#import "BaseModel.h"
                  
@interface LabelModel : NSObject<BaseModel>
                  
- (NSString *)titleLabelText;
- (NSString *)detailLabelText;
                  
@end'></textarea>
                </div>
              </form>
            </div>
            <div class="col-xs-6 output">
              <form>
                <div class="form-group">
                  <label for="outout-m">Output(.m):</label>
                  <div class="text-right">
                    <button type="button" class="btn btn-primary btn-xs" id="button-copy-m">Copy</button>
                  </div> 
                  <textarea class="form-control" rows="20" id="output-m-text" placeholder='#import "LabelModel.h"

@interface LabelModel()

@property (nonatomic, strong) NSString *titleLabel;
@property (nonatomic, strong) NSString *detailLabel;

@end

@implementation LabelModel

- (instancetype)initFromDictionary:(NSDictionary *)dict {
	self = [super init];
	if (self) {
		self.titleLabel = dict[@"titleLabel"];
		self.detailLabel = dict[@"detailLabel"];
	}
	return self;
}

- (NSString *)titleLabelText {
	return self.titleLabel;
}

- (NSString *)detailLabelText {
	return self.detailLabel;
}

@end'></textarea>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>

    </div>
  </body>
</html>
