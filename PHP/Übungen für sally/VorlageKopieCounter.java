private void setDuplicateName() {

        name = profile.getName();
        int counter = nameConstraintsCounter();

        if (name.contains(getText("bss.saveSearch.dialog.duplicate.copy"))) {

        name = checkNameExsist(counter, name);

        } else {
        name = checkNameExsist(0, profile.getName() + " " + getText("bss.saveSearch.dialog.duplicate.copy"));
        }
        name = CheckNameLength(name);
        }

private String CheckNameLength(String name) {
        if (name.length() > 128) {
        name = name.substring(0, 128);
        }
        return name;
        }

private String checkNameExsist(int counter, String duplicateName) {
        ArrayList<String> profileNames = getAllSearchProfilesByFav(profile.getFav());
        if (profileNames.contains(duplicateName)) {
        String tempName = null;
        if (duplicateName.contains(Integer.toString(counter))) {
        tempName = duplicateName.substring(0, duplicateName.length() - 1) + (counter + 1);
        } else {
        tempName = duplicateName.substring(0, duplicateName.length()) + " " + (counter + 1);

        }
        if (profileNames.contains(tempName)) {
        return checkNameExsist(counter + 1, tempName);
        } else {
        return tempName;
        }
        } else {
        return duplicateName;
        }
        }

private int nameConstraintsCounter() {
        int counter;
        try {
        counter = Integer.parseInt(name.substring(name.length() - 1));
        } catch (Exception e) {
        counter = 0;
        }

        return counter;

        }
