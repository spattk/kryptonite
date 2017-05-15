## Pull Requests

Please adhere to the coding conventions used throughout the project (whitespace,
accurate comments, etc.).

Follow this process if you'd like your work considered for inclusion in the
project:

1. [Fork](http://help.github.com/fork-a-repo/) the project, clone your fork,
   and configure the remotes:

   ```bash
   # Clone your fork of the repo into the current directory
   git clone https://github.com/<your-username>/kryptonite
   # Navigate to the newly cloned directory
   cd kryptonite
   # Assign the original repo to a remote called "upstream"
   git remote add upstream https://github.com/siteshpattanaik001/kryptonite
   ```

2. If you cloned a while ago, get the latest changes from upstream:

   ```bash
   git checkout master
   git pull upstream master
   ```

3. **Never work directly on `master`. Create a new [topic branch](http://stackoverflow.com/questions/284514/what-is-a-git-topic-branch) (off the latest
   version of `master`) to contain your feature, change, or fix:**

   ```bash
   git checkout -b <topic-branch-name>
   ```

4. Commit your changes in logical chunks. Please adhere to the above mentioned Git commit messssage conventions.
   Ue Git's [interactive rebase](https://help.github.com/articles/interactive-rebase)
   feature to tidy up your commits before making them public.

5. Locally **rebase** the upstream development branch into your topic branch:

   ```bash
   git pull --rebase upstream master
   ```

6. Push your topic branch up to your fork:

   ```bash
   git push origin <topic-branch-name>
   ```

10. [Open a Pull Request](https://help.github.com/articles/using-pull-requests/)
    with a clear title and description.

11. Use `git rebase` (not `git merge`) to sync your work from time to time.

**CAUTION: NEVER PUSH TO THE UPSTREAM REPO DIRECTLY.**

## Best Practices
Consider reading [this](https://sethrobertson.github.io/GitBestPractices/#backups) and stick to the practice.
