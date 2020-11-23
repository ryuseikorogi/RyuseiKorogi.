class AddNamesToSite < ActiveRecord::Migration[6.0]
  def change
    add_column :sites, :site_name, :string
    add_column :sites, :site_URL, :string
    add_column :sites, :site_Description, :string
  end
end
