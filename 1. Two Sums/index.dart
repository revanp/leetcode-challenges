class Solution {
  List<int> twoSum(List<int> nums, int target) {
    Map<int, int> map = {};

    for (int i = 0; i < nums.length; i++) {
      int diff = target - nums[i];

      if (map.containsKey(diff)) {
        return [map[diff]!, i];
      }

      map[nums[i]] = i;
    }

    return [];
  }
}
