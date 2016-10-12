interface IPlugin {
  function getMenuItems();
  function getArticles();
  function getSideBars();
}
class SomePlugin implements IPlugin {
  public function getMenuItems() {
    //We don't have any menu items
    return null;
  }
  public function getArticles() {
    //We don't have any articles
    return null;
  }
  public function getSideBars() {
    //We have a sidebar
    return array('SideBarItem');
  }
}